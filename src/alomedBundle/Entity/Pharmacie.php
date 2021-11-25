<?php


namespace alomedBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * Class Pharmacie
 * @package alomedBundle\Entity
 * @ORM\Entity(repositoryClass="alomedBundle\Repository\PharmacienRepository")
 */
class Pharmacie
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column (type="integer")
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
     * @ORM\Column (type="string",length=255)
     */
    private $adresse;
    /**
     * @ORM\OneToMany(targetEntity="alomedBundle\Entity\Livraison", mappedBy="pharmacie",orphanRemoval=true)
     */
    private $livraisons;
    /**
     * @ORM\OneToMany(targetEntity="alomedBundle\Entity\Medicaments", mappedBy="pharmacie1",orphanRemoval=true)
     */
    private $medicaments;
    /**
     * @ORM\OneToMany(targetEntity="alomedBundle\Entity\Ordonnance", mappedBy="pharmacie",orphanRemoval=true)
     */
    private $ordonnanceph;
    public function __construct()
    {
        $this->ordonnanceph = new ArrayCollection();
        $this->livraisons = new ArrayCollection();
        $this->medicaments=new ArrayCollection();
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return ArrayCollection
     */
    public function getOrdonnanceph()
    {
        return $this->ordonnanceph;
    }

    /**
     * @param ArrayCollection $ordonnanceph
     */
    public function setOrdonnanceph($ordonnanceph)
    {
        $this->ordonnanceph = $ordonnanceph;
    }

    /**
     * @return ArrayCollection
     */
    public function getLivraisons()
    {
        return $this->livraisons;
    }

    /**
     * @param ArrayCollection $livraisons
     */
    public function setLivraisons($livraisons)
    {
        $this->livraisons = $livraisons;
    }

    /**
     * @return ArrayCollection
     */
    public function getMedicaments()
    {
        return $this->medicaments;
    }

    /**
     * @param ArrayCollection $medicaments
     */
    public function setMedicaments($medicaments)
    {
        $this->medicaments = $medicaments;
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
     * @ORM\Column (type="string",length=255)
     */
    private $password;

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
     * @ORM\Column (type="string",length=255)
     */
    private $email;

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
}