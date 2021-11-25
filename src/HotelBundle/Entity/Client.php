<?php


namespace HotelBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Client
 * @package HotelBundle\Entity
 * @ORM\Entity
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\Column (type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @var
     * @ORM\Column (type="string")
     */
    private $nom;
    /**
     * @var
     * @ORM\Column (type="string")
     */
    private $prenom;
    /**
     * @var
     * @ORM\Column (type="integer")
     */
    private $cin;
    /**
     * @var
     * @ORM\Column (type="integer")
     */
    private $telephone;
    /**
     * @var
     * @ORM\Column (type="string")
     */
    private $couriel;
    /**
     * @var
     * @ORM\Column (type="string")
     */
    private $password;

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
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return ArrayCollection
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * @param ArrayCollection $reservation
     */
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    /**
     * @ORM\OneToMany(targetEntity="HotelBundle\Entity\Reservation",mappedBy="hotelier")
     */
    private $reservation;
    public function __construct(){
        $this->reservation= new ArrayCollection();}
}