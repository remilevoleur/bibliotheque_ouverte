<?php

namespace BUBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RAPPORT_PLANIFIE
 *
 * @ORM\Table(name="r_a_p_p_o_r_t__p_l_a_n_i_f_i_e")
 * @ORM\Entity(repositoryClass="BUBundle\Repository\RAPPORT_PLANIFIERepository")
 */
class RAPPORT_PLANIFIE
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="frequence", type="string", length=255)
     */
    private $frequence;

    /**
     * @var string
     *
     * @ORM\Column(name="granularite", type="string", length=255)
     */
    private $granularite;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return RAPPORT_PLANIFIE
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return RAPPORT_PLANIFIE
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set frequence
     *
     * @param string $frequence
     *
     * @return RAPPORT_PLANIFIE
     */
    public function setFrequence($frequence)
    {
        $this->frequence = $frequence;

        return $this;
    }

    /**
     * Get frequence
     *
     * @return string
     */
    public function getFrequence()
    {
        return $this->frequence;
    }

    /**
     * Set granularite
     *
     * @param string $granularite
     *
     * @return RAPPORT_PLANIFIE
     */
    public function setGranularite($granularite)
    {
        $this->granularite = $granularite;

        return $this;
    }

    /**
     * Get granularite
     *
     * @return string
     */
    public function getGranularite()
    {
        return $this->granularite;
    }
}

