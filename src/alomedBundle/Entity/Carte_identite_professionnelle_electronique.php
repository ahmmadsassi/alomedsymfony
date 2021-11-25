<?php


namespace alomedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Carte_identite_professionnelle_electronique
 * @package alomedBundle\Entity
 * @ORM\Entity
 */
class Carte_identite_professionnelle_electronique
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     *@ORM\Column (type="integer")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNumidentite()
    {
        return $this->numidentite;
    }

    /**
     * @param mixed $numidentite
     */
    public function setNumidentite($numidentite)
    {
        $this->numidentite = $numidentite;
    }

    /**
     * @return mixed
     */
    public function getProdession()
    {
        return $this->prodession;
    }

    /**
     * @param mixed $prodession
     */
    public function setProdession($prodession)
    {
        $this->prodession = $prodession;
    }

    /**
     * @return mixed
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * @param mixed $specialite
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    }

    /**
     * @return mixed
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * @param mixed $medecin
     */
    public function setMedecin($medecin)
    {
        $this->medecin = $medecin;
    }
    /**
     * @ORM\Column (type="integer",length=255)
     */
    private $numidentite;
    /**
     * @ORM\Column (type="string",length=255)
     */
    private $prodession;
    /**
     * @ORM\Column (type="string",length=255)
     */
    private $specialite;



}