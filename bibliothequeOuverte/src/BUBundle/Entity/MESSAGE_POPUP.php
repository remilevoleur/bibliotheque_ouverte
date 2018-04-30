<?php

namespace BUBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MESSAGE_POPUP
 *
 * @ORM\Table(name="m_e_s_s_a_g_e__p_o_p_u_p")
 * @ORM\Entity(repositoryClass="BUBundle\Repository\MESSAGE_POPUPRepository")
 */
class MESSAGE_POPUP
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
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;

    /**
     * @var bool
     *
     * @ORM\Column(name="affichageRecursif", type="boolean")
     */
    private $affichageRecursif;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;


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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return MESSAGE_POPUP
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return MESSAGE_POPUP
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set affichageRecursif
     *
     * @param boolean $affichageRecursif
     *
     * @return MESSAGE_POPUP
     */
    public function setAffichageRecursif($affichageRecursif)
    {
        $this->affichageRecursif = $affichageRecursif;

        return $this;
    }

    /**
     * Get affichageRecursif
     *
     * @return bool
     */
    public function getAffichageRecursif()
    {
        return $this->affichageRecursif;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return MESSAGE_POPUP
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}

