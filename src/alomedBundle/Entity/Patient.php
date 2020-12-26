<?php


namespace alomedBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Patient
 * @package alomedBundle\Entity
 * @ORM\Entity
 */
class Patient
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
     * @ORM\OneToMany(targetEntity="alomedBundle\Entity\Ordonnance", mappedBy="patient",orphanRemoval=true)
     */
    private $ordonnancesp;
    public function __construct()
    {
        $this->ordonnancesp = new ArrayCollection();
        $this->livraisons=new ArrayCollection();
    }
    /**
     * @ORM\OneToMany(targetEntity="alomedBundle\Entity\Livraison", mappedBy="patient",orphanRemoval=true)
     */
    private $livraisons;
    /**
     * @return ArrayCollection
     */
    public function getOrdonnancesp()
    {
        return $this->ordonnancesp;
    }

    /**
     * @param ArrayCollection $ordonnancesp
     */
    public function setOrdonnancesp($ordonnancesp)
    {
        $this->ordonnancesp = $ordonnancesp;
    }
    /**
     * @return datetime
     */
    public function getDateDeNaissance()
    {
        return $this->DateDeNaissance;
    }

    /**
     * @param datetime $DateDeNaissance
     */
    public function setDateDeNaissance(\DateTime $DateDeNaissance)
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
    private $addresse;

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
    public function getAddresse()
    {
        return $this->addresse;
    }

    /**
     * @param mixed $addresse
     */
    public function setAddresse($addresse)
    {
        $this->addresse = $addresse;
    }

}