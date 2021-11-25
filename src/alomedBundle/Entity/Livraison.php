<?php


namespace alomedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Livraison
 * @package alomedBundle\Entity
 * @ORM\Entity
 */

class Livraison
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     *@ORM\Column (type="integer")
     */
    private $idlivraison;

    /**
     * @var datetime
     * @ORM\Column(name="Datelivraison", type="datetime")
     */
    private $Datelivraison;

    /**
     * @ORM\ManyToOne(targetEntity="alomedBundle\Entity\Patient", inversedBy="livraisons")
     */
    private $patient;
    /**
     * @ORM\ManyToOne(targetEntity="alomedBundle\Entity\Pharmacie", inversedBy="livraisons")
     */
    private $pharmacie;
    /**
     * @ORM\ManyToOne(targetEntity="alomedBundle\Entity\livreur", inversedBy="livraisons")
     */
    private $livreur;
    /**
     * @ORM\Column (type="float")
     */
    private  $Tarif;

    /**
     * @return mixed
     */
    public function getIdlivraison()
    {
        return $this->idlivraison;
    }

    /**
     * @param mixed $idlivraison
     */
    public function setIdlivraison($idlivraison)
    {
        $this->idlivraison = $idlivraison;
    }

    /**
     * @return datetime
     */
    public function getDatelivraison()
    {
        return $this->Datelivraison;
    }

    /**
     * @param datetime $Datelivraison
     */
    public function setDatelivraison($Datelivraison)
    {
        $this->Datelivraison = $Datelivraison;
    }

    /**
     * @return mixed
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * @param mixed $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * @return mixed
     */
    public function getPharmacie()
    {
        return $this->pharmacie;
    }

    /**
     * @param mixed $pharmacie
     */
    public function setPharmacie($pharmacie)
    {
        $this->pharmacie = $pharmacie;
    }

    /**
     * @return mixed
     */
    public function getLivreur()
    {
        return $this->livreur;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @var
     * @ORM\Column (type="string")
     */
    private $etat;
    /**
     * @param mixed $livreur
     */
    public function setLivreur($livreur)
    {
        $this->livreur = $livreur;
    }

    /**
     * @return mixed
     */
    public function getTarif()
    {
        return $this->Tarif;
    }

    /**
     * @param mixed $Tarif
     */
    public function setTarif($Tarif)
    {
        $this->Tarif = $Tarif;
    }

}