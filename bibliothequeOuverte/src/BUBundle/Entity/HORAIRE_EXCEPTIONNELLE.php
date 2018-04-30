<?php

namespace BUBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HORAIRE_EXCEPTIONNELLE
 *
 * @ORM\Table(name="h_o_r_a_i_r_e__e_x_c_e_p_t_i_o_n_n_e_l_l_e")
 * @ORM\Entity(repositoryClass="BUBundle\Repository\HORAIRE_EXCEPTIONNELLERepository")
 */
class HORAIRE_EXCEPTIONNELLE
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var bool
     *
     * @ORM\Column(name="ouvert", type="boolean")
     */
    private $ouvert;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return HORAIRE_EXCEPTIONNELLE
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set ouvert
     *
     * @param boolean $ouvert
     *
     * @return HORAIRE_EXCEPTIONNELLE
     */
    public function setOuvert($ouvert)
    {
        $this->ouvert = $ouvert;

        return $this;
    }

    /**
     * Get ouvert
     *
     * @return bool
     */
    public function getOuvert()
    {
        return $this->ouvert;
    }
}

