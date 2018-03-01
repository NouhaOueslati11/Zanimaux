<?php

namespace Pi\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animaux
 *
 * @ORM\Table(name="animaux")
 * @ORM\Entity(repositoryClass="Pi\FrontBundle\Repository\AnimauxRepository")
 */
class Animaux
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
     * @ORM\Column(name="nom_a", type="string", length=255)
     */
    private $nomA;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float")
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=255)
     */
    private $race;

    /**
     * @var string
     *
     * @ORM\Column(name="telephoneprop", type="string", length=255)
     */
    private $telephoneprop;


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
     * @return Animaux
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
     * Set age
     *
     * @param integer $age
     *
     * @return Animaux
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set poids
     *
     * @param float $poids
     *
     * @return Animaux
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return float
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return Animaux
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set telephoneprop
     *
     * @param string $telephoneprop
     *
     * @return Animaux
     */
    public function setTelephoneprop($telephoneprop)
    {
        $this->telephoneprop = $telephoneprop;

        return $this;
    }

    /**
     * Get telephoneprop
     *
     * @return string
     */
    public function getTelephoneprop()
    {
        return $this->telephoneprop;
    }
}

