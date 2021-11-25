<?php


namespace alomedBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Admin
 * @package alomedBundle\Entity
 * @ORM\Entity(repositoryClass="alomedBundle\Repository\AdminRepository")
 */
class Admin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     *@ORM\Column (type="integer")
     */
    private $idadmin;

    /**
     * @ORM\Column (type="string")
     */
    private $email;

    /**
     * @ORM\Column (type="string")
     */
    private $password;

    /**
     * @return mixed
     */
    public function getIdadmin()
    {
        return $this->idadmin;
    }

    /**
     * @param mixed $idadmin
     */
    public function setIdadmin($idadmin)
    {
        $this->idadmin = $idadmin;
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





}