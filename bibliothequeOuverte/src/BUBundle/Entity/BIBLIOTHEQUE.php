<?php

namespace BUBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BIBLIOTHEQUE
 *
 * @ORM\Table(name="b_i_b_l_i_o_t_h_e_q_u_e")
 * @ORM\Entity(repositoryClass="BUBundle\Repository\BIBLIOTHEQUERepository")
 */
class BIBLIOTHEQUE
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPrincipal", type="string", length=255)
     */
    private $nomPrincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSecondaire", type="string", length=255)
     */
    private $nomSecondaire;

    /**
     * @var string
     *
     * @ORM\Column(name="siteWeb", type="string", length=255, nullable=true)
     */
    private $siteWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="acces", type="string", length=255)
     */
    private $acces;

    /**
     * @var bool
     *
     * @ORM\Column(name="emprunt", type="boolean")
     */
    private $emprunt;

    /**
     * @var int
     *
     * @ORM\Column(name="places", type="integer")
     */
    private $places;

    /**
     * @var string
     *
     * @ORM\Column(name="urlCatalogue", type="string", length=255, nullable=true)
     */
    private $urlCatalogue;

    /**
     * @var int
     *
     * @ORM\Column(name="nbJoursReservations", type="integer")
     */
    private $nbJoursReservations;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=255)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="coordGPS", type="string", length=255)
     */
    private $coordGPS;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomPrincipal
     *
     * @param string $nomPrincipal
     *
     * @return BIBLIOTHEQUE
     */
    public function setNomPrincipal($nomPrincipal)
    {
        $this->nomPrincipal = $nomPrincipal;

        return $this;
    }

    /**
     * Get nomPrincipal
     *
     * @return string
     */
    public function getNomPrincipal()
    {
        return $this->nomPrincipal;
    }

    /**
     * Set nomSecondaire
     *
     * @param string $nomSecondaire
     *
     * @return BIBLIOTHEQUE
     */
    public function setNomSecondaire($nomSecondaire)
    {
        $this->nomSecondaire = $nomSecondaire;

        return $this;
    }

    /**
     * Get nomSecondaire
     *
     * @return string
     */
    public function getNomSecondaire()
    {
        return $this->nomSecondaire;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     *
     * @return BIBLIOTHEQUE
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set acces
     *
     * @param string $acces
     *
     * @return BIBLIOTHEQUE
     */
    public function setAcces($acces)
    {
        $this->acces = $acces;

        return $this;
    }

    /**
     * Get acces
     *
     * @return string
     */
    public function getAcces()
    {
        return $this->acces;
    }

    /**
     * Set emprunt
     *
     * @param boolean $emprunt
     *
     * @return BIBLIOTHEQUE
     */
    public function setEmprunt($emprunt)
    {
        $this->emprunt = $emprunt;

        return $this;
    }

    /**
     * Get emprunt
     *
     * @return bool
     */
    public function getEmprunt()
    {
        return $this->emprunt;
    }

    /**
     * Set places
     *
     * @param integer $places
     *
     * @return BIBLIOTHEQUE
     */
    public function setPlaces($places)
    {
        $this->places = $places;

        return $this;
    }

    /**
     * Get places
     *
     * @return int
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * Set urlCatalogue
     *
     * @param string $urlCatalogue
     *
     * @return BIBLIOTHEQUE
     */
    public function setUrlCatalogue($urlCatalogue)
    {
        $this->urlCatalogue = $urlCatalogue;

        return $this;
    }

    /**
     * Get urlCatalogue
     *
     * @return string
     */
    public function getUrlCatalogue()
    {
        return $this->urlCatalogue;
    }

    /**
     * Set nbJoursReservations
     *
     * @param integer $nbJoursReservations
     *
     * @return BIBLIOTHEQUE
     */
    public function setNbJoursReservations($nbJoursReservations)
    {
        $this->nbJoursReservations = $nbJoursReservations;

        return $this;
    }

    /**
     * Get nbJoursReservations
     *
     * @return int
     */
    public function getNbJoursReservations()
    {
        return $this->nbJoursReservations;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return BIBLIOTHEQUE
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return BIBLIOTHEQUE
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return BIBLIOTHEQUE
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return BIBLIOTHEQUE
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set coordGPS
     *
     * @param string $coordGPS
     *
     * @return BIBLIOTHEQUE
     */
    public function setCoordGPS($coordGPS)
    {
        $this->coordGPS = $coordGPS;

        return $this;
    }

    /**
     * Get coordGPS
     *
     * @return string
     */
    public function getCoordGPS()
    {
        return $this->coordGPS;
    }
}

