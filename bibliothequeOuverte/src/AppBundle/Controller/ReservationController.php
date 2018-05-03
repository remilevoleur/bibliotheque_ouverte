<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReservationController extends Controller
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservationAction(Request $request)
    {
        $salles = array(101,102,103,104);
        return $this->render('default/reservation.html.twig', array("nomBibliotheque" => $_POST['reservation'],
            "listSalles" =>$salles));
    }
}
