<?php


namespace alomedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Ordonnance
 * @package alomedBundle\Entity
 * @ORM\Entity
 */
class Ordonnance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     *@ORM\Column (type="integer")
     */
    private $idordonnance;
/**
 * @ORM\Column (type="string")
 */
private $text;
    /**
     * @var datetime
     * @ORM\Column(name="Dateconsultation", type="datetime")
     */

private $Dateconsultation;
    /**
     * @ORM\ManyToOne(targetEntity="alomedBundle\Entity\Medecin", inversedBy="ordonnances")
     */
    private $medecin;
    /**
     * @ORM\ManyToOne(targetEntity="alomedBundle\Entity\Patient", inversedBy="ordonnancesp")
     */
    private $patient;

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
     * @ORM\ManyToOne(targetEntity="alomedBundle\Entity\Pharmacie", inversedBy="ordonnancesph")
     */
    private $pharmacie;
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
    public function getIdordonnance()
    {
        return $this->idordonnance;
    }

    /**
     * @param mixed $idordonnance
     */
    public function setIdordonnance($idordonnance)
    {
        $this->idordonnance = $idordonnance;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return datetime
     */
    public function getDateconsultation()
    {
        return $this->Dateconsultation;
    }

    /**
     * @param datetime $Dateconsultation
     */
    public function setDateconsultation($Dateconsultation)
    {
        $this->Dateconsultation = $Dateconsultation;
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

}