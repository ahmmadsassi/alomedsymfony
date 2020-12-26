<?php


namespace alomedBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use alomedBundle\Entity\Carte_identite_professionnelle_electronique;
/**
 * Class Medecin
 * @package alomedBundle\Entity
 * @ORM\Entity
 */
class Medecin
{


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     *@ORM\Column (type="integer")
     */
    private $id;

    /**
     * @ORM\Column (type="string",length=255)
     */
    private $nom;
    /**
     * @ORM\Column (type="string",length=255)
     */
    private $prenom;
    /**
     * @var \DateTime
     * @ORM\Column(name="DateDeNaissance", type="datetime")
     */
    private $DateDeNaissance;

    /**
     * @return \DateTime
     */
    public function getDateDeNaissance()
    {
        return $this->DateDeNaissance;
    }

    /**
     * @param \DateTime $DateDeNaissance
     */
    public function setDateDeNaissance( \DateTime $DateDeNaissance)
    {
        $this->DateDeNaissance = $DateDeNaissance;
    }



/**
 * @ORM\Column (type="string",length=255)
 */
    private $password;

/**
* @ORM\Column (type="string",length=255)
*/
    private $email;

    /**
     * @ORM\Column (type="string",length=255)
     */
    private $telephone;
    /**
     * @ORM\Column (type="string",length=255)
     */
    private $addressecabinet;
    /**
     * @ORM\OneToMany(targetEntity="alomedBundle\Entity\Ordonnance", mappedBy="medecin",orphanRemoval=true)
     */
    private $ordonnances;
    public function __construct()
    {
        $this->ordonnances = new ArrayCollection();
    }

    /**
     * @ORM\OneToOne(targetEntity="alomedBundle\Entity\Carte_identite_professionnelle_electronique")
     * @ORM\JoinColumn(name="id_carte", referencedColumnName="id")
     */
    private $carteprofessionnelle;

    /**
     * @return mixed
     */
    public function getCarteprofessionnelle()
    {
        return $this->carteprofessionnelle;
    }

    /**
     * @param mixed $carteprofessionnelle
     */
    public function setCarteprofessionnelle($carteprofessionnelle)
    {
        $this->carteprofessionnelle = $carteprofessionnelle;
    }
    /**
     * @return ArrayCollection
     */
    public function getOrdonnances()
    {
        return $this->ordonnances;
    }

    /**
     * @param ArrayCollection $ordonnances
     */
    public function setOrdonnances($ordonnances)
    {
        $this->ordonnances = $ordonnances;
    }

    /*
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
    public function getDatenaiss()
    {
        return $this->datenaiss;
    }

    /**
     * @param mixed $datenaiss
     */
    public function setDatenaiss($datenaiss)
    {
        $this->datenaiss = $datenaiss;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    public function getAddressecabinet()
    {
        return $this->addressecabinet;
    }

    /**
     * @param mixed $addressecabinet
     */
    public function setAddressecabinet($addressecabinet)
    {
        $this->addressecabinet = $addressecabinet;
    }
}