<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccueilController extends Controller
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueilAction(Request $request)
    {
        $a = new Bibliotheque();
        $a->init("Saint-Charles", "Ouverte", "809m", "st-charles.jpg");
        $b = new Bibliotheque();
        $b->init("La Timone", "Fermée", "2km", "timone.jpg");
        $c = new Bibliotheque();
        $c->init("Aix Droit", "Ouverte", "29km", "droit-aix.jpg");
        $d = new Bibliotheque();
        $d->init("Luminy", "Ouverte", "8km", "luminy.jpg");


        $listeBibliotheques = array($a, $b, $c, $d);



        return $this->render('default/accueil.html.twig', array("listeBibliotheques" => $listeBibliotheques));
    }
}
