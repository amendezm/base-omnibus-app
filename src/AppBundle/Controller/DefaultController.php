<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DiasSemana;
use AppBundle\Entity\Rol;
use AppBundle\Entity\Servicio;
use AppBundle\Entity\TipoCombustible;
use AppBundle\Entity\TipoIncidencia;
use Proxies\__CG__\AppBundle\Entity\Tipo_horas_trabajo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("has_role('ROLE_ADMIN')or has_role('EspecialistaGPS') or has_role('EspecialistaOperaciones')or has_role('EspecialistaEnergia') or has_role('EspecialistaRecaudacion')or has_role('EspecialistaRRHH')");
 *
 *
 *
 */
class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        // Si no estan los dias de la semana en la base de datos debe agregarlos
        $em = $this->getDoctrine()->getManager();
        $dias = $em->getRepository('AppBundle:DiasSemana')->findAll();
        $servicio = $em->getRepository('AppBundle:Servicio')->findAll();
        $combustibleTipo = $em->getRepository('AppBundle:TipoCombustible')->findAll();
        $typeIncidencias = $em->getRepository('AppBundle:TipoIncidencia')->findAll();
        $trabajadores = $em->getRepository('AppBundle:Trabajador')->findAll();
        $omnibus = $em->getRepository('AppBundle:Omnibus')->findAll();
        $bases = $em->getRepository('AppBundle:base')->findAll();

        
        $cant = 0;
        $cont = 0;
        $comb = 0;
        $horas = 0;
        $incidencias = 0;
       
        foreach ($dias as $d) {
            $cant++;
        }

        if ($cant == 0) {
            $lun = new DiasSemana();
            $lun->setDia("Lun");
            $em->persist($lun);

            $mar = new DiasSemana();
            $mar->setDia("Mar");
            $em->persist($mar);

            $mie = new DiasSemana();
            $mie->setDia("Mie");
            $em->persist($mie);

            $jue = new DiasSemana();
            $jue->setDia("Jue");
            $em->persist($jue);

            $vie = new DiasSemana();
            $vie->setDia("Vie");
            $em->persist($vie);

            $sab = new DiasSemana();
            $sab->setDia("Sab");
            $em->persist($sab);

            $dom = new DiasSemana();
            $dom->setDia("Dom");
            $em->persist($dom);

            $em->flush();
        }
        foreach ($typeIncidencias as $i) {
            $incidencias++;
        }

        if ($incidencias == 0) {
            $Ninguna = new TipoIncidencia();
            $Ninguna->setTipoIncidencias("Ninguna");
            $em->persist($Ninguna);

            $RT = new TipoIncidencia();
            $RT->setTipoIncidencias("RT");
            $em->persist($RT);

            $RC = new TipoIncidencia();
            $RC->setTipoIncidencias("RC");
            $em->persist($RC);

            $CH = new TipoIncidencia();
            $CH->setTipoIncidencias("CH");
            $em->persist($CH);

            $M = new TipoIncidencia();
            $M->setTipoIncidencias("M");
            $em->persist($M);


            $A = new TipoIncidencia();
            $A->setTipoIncidencias("A");
            $em->persist($A);

            $FC = new TipoIncidencia();
            $FC->setTipoIncidencias("FC");
            $em->persist($FC);

            $OC = new TipoIncidencia();
            $OC->setTipoIncidencias("OC");
            $em->persist($OC);

            $SE = new TipoIncidencia();
            $SE->setTipoIncidencias("SE");
            $em->persist($SE);

            $em->flush();
        }
        foreach ($servicio as $s) {
            $cont++;
        }
        if ($cont == 0) {
            $urbano = new Servicio();
            $urbano->setTipo("Urbano");
            $em->persist($urbano);

            $interurbano = new Servicio();
            $interurbano->setTipo("Interurbano");
            $em->persist($interurbano);

            $suburbano = new Servicio();
            $suburbano->setTipo("Suburbano");
            $em->persist($suburbano);

            $rural = new Servicio();
            $rural->setTipo("Rural");
            $em->persist($rural);

            $em->flush();
        }
        foreach ($combustibleTipo as $c) {
            $comb++;
        }
        if ($comb == 0) {
            $diesel = new TipoCombustible();
            $diesel->setTipo("Diesel");
            $em->persist($diesel);

            $gasolina = new TipoCombustible();
            $gasolina->setTipo("Gasolina");
            $em->persist($gasolina);
            $em->flush();
        }

        return $this->render('index.html.twig', array(
            'numeroTrabajadores' => count($trabajadores),
            'numeroOmnibus' => count($omnibus),
            'numeroBases' => count($bases),
        ));
    }
    public function salvabdAction()
    {
        exec("C:/xampp/htdocs/base/salva.bat");

        $last_username = $this->getRequest()->getSession()->get(SecurityContext::LAST_USERNAME);

        $us = $this->get('security.context')->getToken()->getUser();
        return $this->render('AppBundle:Default:salvabd.html.twig', array(
            'usuario' => $us,
            'last_username' => $last_username,
        ));
    }
}
