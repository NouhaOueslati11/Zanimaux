<?php

namespace Pi\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Petsitter
 *
 * @ORM\Table(name="petsitter")
 * @ORM\Entity(repositoryClass="Pi\FrontBundle\Repository\PetsitterRepository")
 */
class Petsitter
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
     * @ORM\Column(name="nom_p", type="string", length=255)
     */
    private $nomP;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_p", type="string", length=255)
     */
    private $adressP;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_p", type="string", length=255)
     */
    private $villeP;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_p", type="string", length=255)
     */
    private $phoneP;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_p", type="string", length=255)
     */
    private $mailP;


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
     * Set nomP
     *
     * @param string $nomP
     *
     * @return Petsitter
     */
    public function setNomP($nomP)
    {
        $this->nomP = $nomP;

        return $this;
    }

    /**
     * Get nomP
     *
     * @return string
     */
    public function getNomP()
    {
        return $this->nomP;
    }

    /**
     * Set adressP
     *
     * @param string $adressP
     *
     * @return Petsitter
     */
    public function setAdressP($adressP)
    {
        $this->adressP = $adressP;

        return $this;
    }

    /**
     * Get adressP
     *
     * @return string
     */
    public function getAdressP()
    {
        return $this->adressP;
    }

    /**
     * Set villeP
     *
     * @param string $villeP
     *
     * @return Petsitter
     */
    public function setVilleP($villeP)
    {
        $this->villeP = $villeP;

        return $this;
    }

    /**
     * Get villeP
     *
     * @return string
     */
    public function getVilleP()
    {
        return $this->villeP;
    }

    /**
     * Set phoneP
     *
     * @param string $phoneP
     *
     * @return Petsitter
     */
    public function setPhoneP($phoneP)
    {
        $this->phoneP = $phoneP;

        return $this;
    }

    /**
     * Get phoneP
     *
     * @return string
     */
    public function getPhoneP()
    {
        return $this->phoneP;
    }

    /**
     * Set mailP
     *
     * @param string $mailP
     *
     * @return Petsitter
     */
    public function setMailP($mailP)
    {
        $this->mailP = $mailP;

        return $this;
    }

    /**
     * Get mailP
     *
     * @return string
     */
    public function getMailP()
    {
        return $this->mailP;
    }
}

