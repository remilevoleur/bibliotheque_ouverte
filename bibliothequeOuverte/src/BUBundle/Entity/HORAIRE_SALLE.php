<?php

namespace BUBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HORAIRE_SALLE
 *
 * @ORM\Table(name="h_o_r_a_i_r_e__s_a_l_l_e")
 * @ORM\Entity(repositoryClass="BUBundle\Repository\HORAIRE_SALLERepository")
 */
class HORAIRE_SALLE
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
     * @var \DateTime
     *
     * @ORM\Column(name="ouverture", type="datetime")
     */
    private $ouverture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fermeture", type="datetime")
     */
    private $fermeture;


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
     * Set ouverture
     *
     * @param \DateTime $ouverture
     *
     * @return HORAIRE_SALLE
     */
    public function setOuverture($ouverture)
    {
        $this->ouverture = $ouverture;

        return $this;
    }

    /**
     * Get ouverture
     *
     * @return \DateTime
     */
    public function getOuverture()
    {
        return $this->ouverture;
    }

    /**
     * Set fermeture
     *
     * @param \DateTime $fermeture
     *
     * @return HORAIRE_SALLE
     */
    public function setFermeture($fermeture)
    {
        $this->fermeture = $fermeture;

        return $this;
    }

    /**
     * Get fermeture
     *
     * @return \DateTime
     */
    public function getFermeture()
    {
        return $this->fermeture;
    }
}

