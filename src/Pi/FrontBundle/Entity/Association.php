<?php

namespace Pi\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Association
 *
 * @ORM\Table(name="association")
 * @ORM\Entity(repositoryClass="Pi\FrontBundle\Repository\AssociationRepository")
 */
class Association
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
     * @ORM\Column(name="Nom_a", type="string", length=255)
     */
    private $nomA;

    /**
     * @var string
     *
     * @ORM\Column(name="addressa", type="string", length=255)
     */
    private $addressa;

    /**
     * @var string
     *
     * @ORM\Column(name="villea", type="string", length=255)
     */
    private $villea;

    /**
     * @var string
     *
     * @ORM\Column(name="telephonea", type="string", length=255)
     */
    private $telephonea;

    /**
     * @var string
     *
     * @ORM\Column(name="emaila", type="string", length=255)
     */
    private $emaila;


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
     * Set nomA
     *
     * @param string $nomA
     *
     * @return Association
     */
    public function setNomA($nomA)
    {
        $this->nomA = $nomA;

        return $this;
    }

    /**
     * Get nomA
     *
     * @return string
     */
    public function getNomA()
    {
        return $this->nomA;
    }

    /**
     * Set addressa
     *
     * @param string $addressa
     *
     * @return Association
     */
    public function setAddressa($addressa)
    {
        $this->addressa = $addressa;

        return $this;
    }

    /**
     * Get addressa
     *
     * @return string
     */
    public function getAddressa()
    {
        return $this->addressa;
    }

    /**
     * Set villea
     *
     * @param string $villea
     *
     * @return Association
     */
    public function setVillea($villea)
    {
        $this->villea = $villea;

        return $this;
    }

    /**
     * Get villea
     *
     * @return string
     */
    public function getVillea()
    {
        return $this->villea;
    }

    /**
     * Set telephonea
     *
     * @param string $telephonea
     *
     * @return Association
     */
    public function setTelephonea($telephonea)
    {
        $this->telephonea = $telephonea;

        return $this;
    }

    /**
     * Get telephonea
     *
     * @return string
     */
    public function getTelephonea()
    {
        return $this->telephonea;
    }

    /**
     * Set emaila
     *
     * @param string $emaila
     *
     * @return Association
     */
    public function setEmaila($emaila)
    {
        $this->emaila = $emaila;

        return $this;
    }

    /**
     * Get emaila
     *
     * @return string
     */
    public function getEmaila()
    {
        return $this->emaila;
    }
}

