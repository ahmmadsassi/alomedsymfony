<?php


namespace alomedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class userid
 * @package alomedBundle\Entity
 * @ORM\Entity
 */
class userid
{
    /**
     * @ORM\Id
     *@ORM\Column (type="integer")
     */
    private $idu;
    /**
     * @ORM\Column (type="integer")
     */
    private $token;

    /**
     * @return mixed
     */
    public function getIdu()
    {
        return $this->idu;
    }

    /**
     * @param mixed $idu
     */
    public function setIdu($idu)
    {
        $this->idu = $idu;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }




}