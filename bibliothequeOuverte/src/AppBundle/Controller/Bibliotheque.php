<?php
/**
 * Created by PhpStorm.
 * User: AYMANE
 * Date: 4/21/18
 * Time: 18:37
 */

namespace AppBundle\Controller;


class Bibliotheque
{

    public $nom;
    public $universite;
    public $etat;
    public $distance;
    public $url;


    public function init($nom, $etat, $distance, $url)
    {
        $this->nom = $nom;
        $this->etat = $etat;
        $this->universite = "Aix-Marseille Université";
        $this->distance = $distance;
        $this->url = $url;
    }


}