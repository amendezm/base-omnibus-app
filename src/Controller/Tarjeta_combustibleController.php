<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Entity\Tarjeta_combustible;
use Doctrine\DBAL\Driver\Connection;
use App\Form\Tarjeta_combustibleType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use \Datetime;


// * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_ESPECIALISTA_ENERGIA')")
/**
 *
 * Función para llamar a la plantilla de administración
 * 
 *
 */
class Tarjeta_combustibleController extends AbstractController
{
    /**
     * Lists all Tarjeta_combustible entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tarjeta_combustibles = $em->getRepository('App:Tarjeta_combustible')->findAll();

        return $this->render('tarjeta_combustible/index.html.twig', array(
            'tarjeta_combustibles' => $tarjeta_combustibles,
        ));
    }

    /**
     * Creates a new Tarjeta_combustible entity.
     *
     */
    public function newAction(Request $request)
    {
        $tarjeta_combustible = new Tarjeta_combustible();
        $form = $this->createForm('App\Form\Tarjeta_combustibleType', $tarjeta_combustible);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $tarjeta_combustible->setSaldoActual(0);

            $em->persist($tarjeta_combustible);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('tarjeta_combustible_index', array('id' => $tarjeta_combustible->getId()));
        } else if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
        }

        return $this->render('tarjeta_combustible/new.html.twig', array(
            'tarjeta_combustible' => $tarjeta_combustible,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tarjeta_combustible entity.
     *
     */
    public function showAction(Tarjeta_combustible $tarjeta_combustible)
    {
        return $this->render('tarjeta_combustible/show.html.twig', array(
            'tarjeta_combustible' => $tarjeta_combustible,
        ));
    }

    /**
     * Displays a form to edit an existing Tarjeta_combustible entity.
     *
     */
    public function editAction(Request $request, Tarjeta_combustible $tarjeta_combustible)
    {
        $editForm = $this->createForm('App\Form\Tarjeta_combustibleType', $tarjeta_combustible);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            if ($tarjeta_combustible->getSaldoActual() == null) {
                $tarjeta_combustible->setSaldoActual(0);
            }

            $em->persist($tarjeta_combustible);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('tarjeta_combustible_index', array('id' => $tarjeta_combustible->getId()));
        } else if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('tarjeta_combustible/edit.html.twig', array(
            'tarjeta_combustible' => $tarjeta_combustible,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a Tarjeta_combustible entity.
     *
     */
    public function deleteAction(Request $request, Tarjeta_combustible $tarjeta_combustible)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($tarjeta_combustible);

        $query = 'SELECT
            tarjeta_combustible.notarjeta,
            tipo_combustible.tipo,
            omnibus.noomnibus,
            tarjeta_combustible.saldoactual
         FROM
            public.tarjeta_combustible,
            public.tipo_combustible,
            public.omnibus
         WHERE
            tarjeta_combustible.id = omnibus.id_tarjetacombustible AND
            tipo_combustible.id = tarjeta_combustible.id_combustibletipo;';



        $em->flush();
        $this->addFlash('notice', 'Se ha borrado correctamente!');

        return $this->redirectToRoute('tarjeta_combustible_index');
    }

    /**
     * Creates a form to delete a Tarjeta_combustible entity.
     *
     * @param Tarjeta_combustible $tarjeta_combustible The Tarjeta_combustible entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tarjeta_combustible $tarjeta_combustible)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tarjeta_combustible_delete', array('id' => $tarjeta_combustible->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    public function ReporteTarjetaCombustibleAction(Connection $connection)
    {
        $em = $this->getDoctrine()->getManager();

        $db = $connection;

        $query = 'SELECT
           tarjeta_combustible.notarjeta,
           tipo_combustible.tipo,
           omnibus.noomnibus,
           tarjeta_combustible.saldoactual
        FROM
           public.tarjeta_combustible,
           public.tipo_combustible,
           public.omnibus
        WHERE
           tarjeta_combustible.id = omnibus.id_tarjetacombustible AND
           tipo_combustible.id = tarjeta_combustible.id_combustibletipo;';
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('tarjeta_combustible/reporte_tarjeta.html.twig', array(
            'reportes' => $reportes
        ));
    }

    public function parteTarjetaCombustibleAction(Connection $connection, Request $request)
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

        $query = 'SELECT notarjeta,
                        tipo, 
                        saldoactual::double precision - SUM(cant_asignada) + SUM(cantlitros) as saldoinicial, 
                        SUM(cantlitros) as cantlitros,
                        SUM(cant_asignada) as cant_asignada,
                        fecha,
                        saldoactual 
                        FROM (
                            SELECT notarjeta, 
                                    tipo, 
                                    cast(saldoactual as decimal(9,2)) - cant_asignada as saldoinicial, 
                                    cant_asignada, 0 as cantlitros, 
                                    fecha::timestamp::date, 
                                    saldoactual
                            FROM public.combustible_asignado 
                            JOIN public.tarjeta_combustible ON tarjeta_combustible.id = combustible_asignado.tarjeta_id
                            JOIN public.tipo_combustible ON tarjeta_combustible.id_combustibletipo = tipo_combustible.id
                        UNION
                            SELECT notarjeta,
                                     tipo, 
                                     cast(saldoactual as decimal(9,2)) + cantlitros, 0, 
                                     cantlitros, 
                                     fecha::timestamp::date, 
                                     saldoactual
                            FROM public.combustible_habilitado
                            JOIN public.tarjeta_combustible ON tarjeta_combustible.id = combustible_habilitado.tarjeta_id
                            JOIN public.tipo_combustible ON tarjeta_combustible.id_combustibletipo = tipo_combustible.id) 
                        as derivedTable
                    WHERE fecha = cast(\'$date\' as date)    
                    GROUP BY fecha, notarjeta,saldoactual,tipo
                    ORDER BY fecha DESC
       ';

        $vars = array(
            '$date' => $formDate == null ? $currentDate : $formDate->format('yy-m-d'),
        );

        $queryValue = strtr($query, $vars);

        $stmt = $db->prepare($queryValue);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();



        foreach ($reportes as $key => $value) {
            $query = '
            SELECT SUM(cant_asignada) as cant_asignada
            FROM tarjeta_combustible,combustible_asignado
            WHERE tarjeta_combustible.id = combustible_asignado.tarjeta_id and notarjeta = \'$notarjeta\' and combustible_asignado.fecha > \'$date\'
            GROUP BY notarjeta
            ';

            $vars = array(
                '$notarjeta' => $value['notarjeta'],
                '$date' => $value['fecha'],
            );

            $queryValue = strtr($query, $vars);

            $stmt = $db->prepare($queryValue);
            $params = array();
            $stmt->execute($params);
            $asignaciones = $stmt->fetchAll();

            $reportes[$key]['saldoactual'] = $reportes[$key]['saldoactual'] - (count($asignaciones) > 0 ? $asignaciones[0]['cant_asignada'] : 0);
            $reportes[$key]['saldoinicial'] = $reportes[$key]['saldoinicial'] - (count($asignaciones) > 0 ? $asignaciones[0]['cant_asignada'] : 0);

            $query = '
            SELECT SUM(cantlitros) as cant_habilitada
            FROM tarjeta_combustible,combustible_habilitado
            WHERE tarjeta_combustible.id = combustible_habilitado.tarjeta_id and notarjeta = \'$notarjeta\' and combustible_habilitado.fecha::timestamp::date > \'$date\'
            GROUP BY notarjeta
            ';

            $vars = array(
                '$notarjeta' => $value['notarjeta'],
                '$date' => $value['fecha'],
            );

            $queryValue = strtr($query, $vars);

            $stmt = $db->prepare($queryValue);
            $params = array();
            $stmt->execute($params);
            $habilitaciones = $stmt->fetchAll();

            $reportes[$key]['saldoactual'] = $reportes[$key]['saldoactual'] + (count($habilitaciones) > 0 ? $habilitaciones[0]['cant_habilitada'] : 0);
            $reportes[$key]['saldoinicial'] = $reportes[$key]['saldoinicial'] + (count($habilitaciones) > 0 ? $habilitaciones[0]['cant_habilitada'] : 0);
        }

        return $this->render('tarjeta_combustible/reporte_tarjeta.html.twig', array(
            'reportes' => $reportes,
            'form' => $form->createView()
        ));
    }

    public function parteMensualTarjetaCombustibleAction(Request $request, Connection $connection)
    {
        $years = [];
        $currentYear = date("Y");

        for ($i = $currentYear; $i >= $currentYear - 10; $i--) {
            $years[$i] = $i;
        }

        $currentMonth = (int) date("m");

        $form = $this->createFormBuilder()
            ->add('year', ChoiceType::class, ['choices' => $years])
            ->add('month', ChoiceType::class, [
                'required' => true,
                'multiple' => false,
                'expanded' => false,
                'choices'  => [
                    'Enero' => '1',
                    'Febrero' => '2',
                    'Marzo' => '3',
                    'Abril' => '4',
                    'Mayo' => '5',
                    'Junio' => '6',
                    'Julio' => '7',
                    'Agosto' => '8',
                    'Septiembre' => '9',
                    'Octubre' => '10',
                    'Noviembre' => '11',
                    'Diciembre' => '12',
                ],
                'data' => $currentMonth
            ])
            ->getForm();

        $month = null;
        $year = null;

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $month = $data['month'];
            $year = $data['year'];
        }

        $monthValue = $month == null ? $currentMonth : $month;
        $yearValue = $year == null ? $currentYear : $year;

        $db = $connection;

        $query = 'SELECT notarjeta,tipo, saldoactual::double precision - SUM(cant_asignada) + SUM(cantlitros) as saldoinicial, SUM(cant_asignada) as combustible_asignado, SUM(cantlitros) as combustible_habilitado, saldoactual FROM
                        (SELECT notarjeta, 
                                tipo, 
                                saldoactual::double precision - cant_asignada as saldoinicial, 
                                cant_asignada, 0 as cantlitros, 
                                fecha::timestamp::date, 
                                saldoactual
                        FROM public.tarjeta_combustible
                        LEFT JOIN public.combustible_asignado ON tarjeta_combustible.id = combustible_asignado.tarjeta_id
                        LEFT JOIN public.tipo_combustible ON tarjeta_combustible.id_combustibletipo = tipo_combustible.id
                    UNION
                        SELECT notarjeta,
                                 tipo, 
                                 saldoactual::double precision + cantlitros, 0, 
                                 cantlitros, 
                                 fecha::timestamp::date, 
                                 saldoactual
                        FROM public.tarjeta_combustible
                        LEFT JOIN public.combustible_habilitado ON tarjeta_combustible.id = combustible_habilitado.tarjeta_id
                        LEFT JOIN public.tipo_combustible ON tarjeta_combustible.id_combustibletipo = tipo_combustible.id)
                        as derivedTable 
                WHERE date_part(\'month\', fecha) = $month and date_part(\'year\', fecha) = $year
                GROUP BY notarjeta, tipo, saldoactual	
       ';

        $vars = array(
            '$year' => $yearValue,
            '$month' =>  $monthValue,
        );

        $queryValue = strtr($query, $vars);

        $stmt = $db->prepare($queryValue);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();

        return $this->render('tarjeta_combustible/reporte_tarjeta_mensual.html.twig', array(
            'reportes' => $reportes,
            'form' => $form->createView(),
        ));
    }
}
