<?php


namespace alomedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Medicaments
 * @package alomedBundle\Entity
 * @ORM\Entity
 */
class Medicaments
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     *@ORM\Column (type="integer")
     */
    private $idmede;

    /**
     * @ORM\Column (type="string",length=255)
     */
    private $nom;
    /**
     * @ORM\Column (type="float",length=255)
     */
    private $prix;
    /**
     * @ORM\ManyToOne(targetEntity="alomedBundle\Entity\Pharmacie", inversedBy="medecimanets")
     */
    private $pharmacie1;

    /**
     * @return mixed
     */
    public function getIdmede()
    {
        return $this->idmede;
    }

    /**
     * @param mixed $idmede
     */
    public function setIdmede($idmede)
    {
        $this->idmede = $idmede;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getPharmacie1()
    {
        return $this->pharmacie1;
    }

    /**
     * @param mixed $pharmacie1
     */
    public function setPharmacie1($pharmacie1)
    {
        $this->pharmacie1 = $pharmacie1;
    }



}