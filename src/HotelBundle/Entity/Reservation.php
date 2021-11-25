<?php


namespace HotelBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Reservation
 * @package HotelBundle\Entity
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column (type="integer")
     */
    private $idr;

    /**
     * @return mixed
     */
    public function getIdr()
    {
        return $this->idr;
    }

    /**
     * @param mixed $idr
     */
    public function setIdr($idr)
    {
        $this->idr = $idr;
    }

    /**
     * @return \DateTime
     */
    public function getDatereservation()
    {
        return $this->datereservation;
    }

    /**
     * @param \DateTime $datereservation
     */
    public function setDatereservation( \DateTime $datereservation)
    {
        $this->datereservation = $datereservation;
    }
    /**
     * @var \DateTime
     * @ORM\Column(name="datereservation", type="datetime")
     */
    private $datereservation;

    /**
     * @var
     * @ORM\ManyToOne (targetEntity="HotelBundle\Entity\hotelier",inversedBy="reservation")
     */
    private $hotelier;
    /**
     * @var
     * @ORM\ManyToOne (targetEntity="HotelBundle\Entity\Client",inversedBy="reservation")
     */
    private $client;


    /**
     * @ORM\ManyToOne (targetEntity="HotelBundle\Entity\hotel",inversedBy="reservation")
     */
    private $hotel;

}