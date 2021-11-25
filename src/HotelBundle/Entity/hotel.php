<?php


namespace HotelBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class hotel
 * @package HotelBundle\Entity
 * @ORM\Entity
 */
class hotel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column (type="integer")
     */
    private $id;

    /**
     * @var
     * @ORM\OneToMany (targetEntity="HotelBundle\Entity\hotelier",mappedBy="hotel")
     */
    private $hotelier;

    public function __construct(){
        $this->hotelier= new ArrayCollection();
        $this->reservation= new ArrayCollection();}

    /**
     * @ORM\Column (type="string")
     */
    private $nom;
    /**
     * @ORM\Column (type="string")
     */
    private $adresse;
    /**
     * @ORM\OneToMany(targetEntity="HotelBundle\Entity\Reservation",mappedBy="hotelier")
     */
    private $reservation;

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
    public function getHotelier()
    {
        return $this->hotelier;
    }

    /**
     * @param mixed $hotelier
     */
    public function setHotelier($hotelier)
    {
        $this->hotelier = $hotelier;
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
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getCouriel()
    {
        return $this->couriel;
    }

    /**
     * @param mixed $couriel
     */
    public function setCouriel($couriel)
    {
        $this->couriel = $couriel;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getNbretoile()
    {
        return $this->nbretoile;
    }

    /**
     * @param mixed $nbretoile
     */
    public function setNbretoile($nbretoile)
    {
        $this->nbretoile = $nbretoile;
    }
    /**
     * @ORM\Column (type="string")
     */
    private $couriel;
    /**
     * @var
     * @ORM\Column (type="integer")
     */
    private $telephone;
    /**
     * @var
     * @ORM\Column (type="integer")
     */
    private $nbretoile;

}