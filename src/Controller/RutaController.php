<?php

namespace App\Controller;

use App\Form\ReportesRecaudacionType;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Entity\Ruta;
use App\Form\RutaType;
use Doctrine\DBAL\Driver\Connection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use \Datetime;
use Doctrine\DBAL\Types\FloatType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

// * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_ESPECIALISTA_OPERACIONES')")  

/**
 *
 * Función para llamar a la plantilla de administración
 *
 */
class RutaController extends AbstractController
{

    /**
     * Lists all Ruta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rutas = $em->getRepository('App:Ruta')->findAll();

        return $this->render('ruta/index.html.twig', array(
            'rutas' => $rutas,
        ));
    }

    public function reporteAction(Connection $connection)
    {
        $em = $this->getDoctrine()->getManager();

        $db = $connection;
        $query = 'SELECT omnibus.noomnibus, chofer.nombre, ruta.noruta, hoja_ruta.id as idHR ,servicio.tipo, COUNT(incidencia.idincidencia)
        FROM
           public.omnibus, 
           public.ruta, 
           public.chofer, 
           public.hoja_ruta, 
           public.incidencia_hr, 
           public.incidencia, 
           public.servicio
        WHERE 
            hoja_ruta.id_ruta=ruta.id AND 
            hoja_ruta.id_omnibus=omnibus.id AND 
            omnibus.id=chofer.omnibus_id AND
            hoja_ruta.id=incidencia_hr.idhojaruta AND
            incidencia_hr.idincidencia = incidencia.idincidencia AND
            ruta.servicio_id=servicio.id 
        GROUP BY omnibus.noomnibus, chofer.nombre, ruta.noruta, servicio.tipo, hoja_ruta.id';

        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('ruta/reporte.html.twig', array(
            'reportes' => $reportes
        ));
    }

    public function showIncidencias_xRuta_reporteAction(Connection $connection, Request $request)
    {
        $db = $connection;

        $query = 'SELECT * FROM
        (SELECT omnibus.noomnibus, 
            chofer.nombre, 
            ruta.noruta,
            ruta.salida,
            ruta.destino,
            ruta.distanciakm,
            servicio.tipo, 
            hoja_ruta.id as hojaRutaId, 
            COUNT(incidencia.idincidencia)
            FROM
               public.omnibus, 
               public.ruta, 
               public.chofer, 
               public.hoja_ruta, 
               public.incidencia_hr, 
               public.incidencia, 
               public.servicio
            WHERE 
                hoja_ruta.id_ruta=ruta.id AND 
                hoja_ruta.id_omnibus=omnibus.id AND 
                omnibus.id=chofer.omnibus_id AND
                hoja_ruta.id=incidencia_hr.idhojaruta AND
                incidencia_hr.idincidencia = incidencia.idincidencia AND
                ruta.servicio_id=servicio.id 
            GROUP BY 
                omnibus.noomnibus, 
                chofer.nombre, 
                ruta.noruta, 
                ruta.salida,
                ruta.destino,
                ruta.distanciakm,
                hoja_ruta.id, 
                servicio.tipo)
            AS derivedTable
            WHERE derivedTable.hojaRutaId = $idHR';

        $vars = array(
            '$idHR' => $request->query->get('id'),
        );

        $queryValue = strtr($query, $vars);

        $stmt = $db->prepare($queryValue);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();


        $query = 'SELECT
        incidencia.detalles
     FROM
        public.incidencia_hr,
        public.incidencia
     WHERE
        incidencia_hr.idhojaruta = $idHR AND
        incidencia.idincidencia = incidencia_hr.idincidencia';

        $vars = array(
            '$idHR' => $request->query->get('id'),
        );

        $queryValue = strtr($query, $vars);

        $stmt = $db->prepare($queryValue);
        $params = array();
        $stmt->execute($params);
        $detallesIncidencias = $stmt->fetchAll();

        return $this->render('ruta/showIncidencias_xRuta_reporte.html.twig', array(
            'reporte' => $reportes[0],
            'incidencias' => $detallesIncidencias,
        ));
    }

    /**
     * Creates a new Ruta entity.
     *
     */
    public function newAction(Request $request)
    {
        $ruta = new Ruta();
        $form = $this->createForm('App\Form\RutaType', $ruta);
        $form->handleRequest($request);
        $cantDias = 0;

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $dias = $ruta->getDias();
            $strDias = "";

            if ($dias != null) {
                foreach ($dias as $d) {
                    $strDias .= $d . ", ";
                    $cantDias = $cantDias + 1;
                }
            }

            $ruta->setFrecuencia($strDias);
            $ruta->setCantDiasSemanaTrabajo($cantDias);
            $ruta->setRecaudacion(0);
            $em->persist($ruta);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('ruta_index', array('id' => $ruta->getId()));
        } else if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
        }

        return $this->render('ruta/new.html.twig', array(
            'ruta' => $ruta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ruta entity.
     *
     */
    public function showAction(Ruta $ruta)
    {
        return $this->render('ruta/show.html.twig', array(
            'ruta' => $ruta,
        ));
    }

    /**
     * Displays a form to edit an existing Ruta entity.
     *
     */
    public function editAction(Request $request, Ruta $ruta)
    {
        $strAux = $ruta->getFrecuencia();
        if ($strAux != "") {
            $strArr = str_split($strAux, 5);
            foreach ($strArr as $t) {
                $ruta->addDia($this->getDoctrine()->getManager()->getRepository('App:DiasSemana')->findOneByDia(substr($t, 0, 3)));
            }
        }

        $editForm = $this->createForm('App\Form\RutaType', $ruta);
        $editForm->handleRequest($request);
        $cantDias = 0;
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // Coje los dias escojidos y lo guarda en la frecuencia
            $this->orderDays($ruta);

            $dias = $ruta->getDias();
            $strDias = "";

            if ($dias != null) {
                foreach ($dias as $d) {
                    $strDias .= $d . ", ";
                    $cantDias = $cantDias + 1;
                }
            }

            $ruta->setFrecuencia($strDias);
            $ruta->setCantDiasSemanaTrabajo($cantDias);

            $em->persist($ruta);
            $em->flush();

            $em->persist($ruta);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('ruta_index', array('id' => $ruta->getId()));
        } else if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('ruta/edit.html.twig', array(
            'ruta' => $ruta,
            'edit_form' => $editForm->createView(),
            //            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ruta entity.
     *
     */
    public function deleteAction(Request $request, Ruta $ruta)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($ruta);
        $em->flush();

        $this->addFlash('notice', 'Se ha borrado correctamente!');

        return $this->redirectToRoute('ruta_index');
    }

    /**
     * Creates a form to delete a Ruta entity.
     *
     * @param Ruta $ruta The Ruta entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ruta $ruta)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ruta_delete', array('id' => $ruta->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }


    public function reporteSalidasAction(Connection $connection, Request $request)
    {

        $currentDate = date('yy-m-d');

        $form = $this->createFormBuilder()
            ->add('date', DateType::class,  [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-date-format' => 'yyyy-mm-dd'],
                'data' => new DateTime($currentDate)
            ])
            ->getForm();

        $formDate = null;

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $formDate = $data['date'];
        }

        $em = $this->getDoctrine()->getManager();

        $db = $connection;

        $query = 'SELECT ruta.noruta, ruta.destino, ruta.salida, ruta.frecuencia, hoja_ruta.fecha, 
        round( cast(recaudacion.recaudacion/g_p_s.combustible as decimal(9,2)), 2) AS recaudacion_Lt, 
        round( cast(recaudacion.recaudacion/hoja_ruta.cantidadviajes as decimal(9,2)), 2) AS recaudacion_viajes, 
        round( cast((recaudacion.recaudacion/hoja_ruta.cantidadviajes)/ruta.preciopasaje as decimal(9,2)), 2) AS pasajeros_viajes, 
        round( cast(g_p_s.kmrecorridos/g_p_s.combustible as decimal(9,2)), 2) AS kilometros_Lt, 
        round( cast(((recaudacion.recaudacion/hoja_ruta.cantidadviajes)/ruta.preciopasaje)/tipo_omnibus.capacidad_total*100 as decimal(9,2)), 2) AS Aprov_Cap
        FROM public.ruta, public.recaudacion, public.hoja_ruta, public.g_p_s, public.tipo_omnibus, public.omnibus 
        WHERE recaudacion.id_hojaruta = hoja_ruta.id AND hoja_ruta.id_ruta = ruta.id 
        AND g_p_s.id_omnibus = hoja_ruta.id_omnibus AND tipo_omnibus.id = omnibus.id_tipoomnibus  
        AND omnibus.id=hoja_ruta.id_omnibus AND hoja_ruta.fecha = g_p_s.fecha AND  hoja_ruta.fecha = cast(\'$date\' as date)';

        $vars = array(
            '$date' => $formDate == null ? $currentDate : $formDate->format('yy-m-d'),
        );

        $queryValue = strtr($query, $vars);

        $stmt = $db->prepare($queryValue);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('ruta/reporte_salidas.html.twig', array(
            'reportes' => $reportes,
            'form' => $form->createView()
        ));
    }

    public function reporteSalidasAcumuladoAction(Connection $connection)
    {
        $em = $this->getDoctrine()->getManager();

        $db = $connection;

        $query = 'SELECT DISTINCT ruta.noruta, ruta.destino, ruta.salida, ruta.frecuencia, 
        round(cast(SUM(recaudacion.recaudacion)/SUM(g_p_s.combustible) as decimal(9,2)), 2) AS recaudacion_Lt, 
        round(cast(SUM(recaudacion.recaudacion)/SUM(hoja_ruta.cantidadviajes) as decimal(9,2)), 2) AS recaudacion_viajes, 
        round(cast((SUM(recaudacion.recaudacion)/SUM(hoja_ruta.cantidadviajes))/ruta.preciopasaje as decimal(9,2)), 2) AS pasajeros_viajes, 
        round(cast(SUM(g_p_s.kmrecorridos)/SUM(g_p_s.combustible) as decimal(9,2)), 2) AS kilometros_Lt, 
        round(cast(((SUM(recaudacion.recaudacion)/SUM(hoja_ruta.cantidadviajes))/ruta.preciopasaje)/tipo_omnibus.capacidad_total*100 as decimal(9,2)), 2) AS Aprov_Cap 
        FROM public.ruta, public.recaudacion, public.hoja_ruta, public.g_p_s, public.tipo_omnibus, public.omnibus 
        WHERE recaudacion.id_hojaruta = hoja_ruta.id AND hoja_ruta.id_ruta = ruta.id 
        AND g_p_s.id_omnibus = hoja_ruta.id_omnibus AND tipo_omnibus.id = omnibus.id_tipoomnibus  
        AND omnibus.id=hoja_ruta.id_omnibus 
        GROUP BY ruta.noruta, ruta.destino, ruta.salida, ruta.frecuencia,ruta.preciopasaje,tipo_omnibus.capacidad_total';

        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('ruta/reporte_salidas_acumulado.html.twig', array(
            'reportes' => $reportes
        ));
    }

    public function planificacion_diaria_combustibleAction(Request $request, Connection $connection)
    {
        $form = $this->createFormBuilder()
            ->add('days', IntegerType::class, ['required' => true])
            ->add('fuel', NumberType::class, ['required' => true])
            ->getForm();

        $days = null;
        $fuel = null;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $days = $data['days'];
            $fuel = $data['fuel'];
        }

        $daysValue = $days == null ? 1 : $days;
        $fuelValue = $fuel == null ? 0 : $fuel;

        $db = $connection;

        $query = 'SELECT 
                    noruta,
                    noomnibus,
                    cantidadmedios, 
                    kmsalida * cantidadsalidas * cantidadmedios as kms_diarios,
                    cantidadsalidas,
                    (kmsalida * cantidadsalidas * cantidadmedios)/indiceconsumonormado as consumo_diario,
                    ((kmsalida * cantidadsalidas * cantidadmedios)/indiceconsumonormado) * $days as consumo_total,
                    ((kmsalida * cantidadsalidas * cantidadmedios)/indiceconsumonormado) * $days * $fuel_price as gasto_total,
                    fecha
                FROM 
                    public.ruta, 
                    public.hoja_ruta,
                    public.omnibus,
                    public.tipo_omnibus
                WHERE 
                    ruta.id=hoja_ruta.id_ruta AND
                    omnibus.id = hoja_ruta.id_omnibus AND
                    omnibus.id_tipoomnibus = tipo_omnibus.id
                    ';

        $vars = array(
            '$days' => $daysValue,
            '$fuel_price' =>  $fuelValue,
        );

        $queryValue = strtr($query, $vars);

        $stmt = $db->prepare($queryValue);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();

        return $this->render('ruta/planificacion_diaria_combustible.html.twig', array(
            'reportes' => $reportes,
            'form' => $form->createView(),
        ));
    }

    private function orderDays(Ruta $ruta)
    {
        $days = $ruta->getDias()->getValues();

        $ruta->getDias()->clear();

        sort($days);

        foreach ($days as $d) {
            $ruta->addDia($d);
        }
    }
}
