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
     * @ORM\Column(name="Dateconsultation", type="datetime")
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


}