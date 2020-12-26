<?php


namespace alomedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Admin
 * @package alomedBundle\Entity
 * @ORM\Entity
 */
class Admin
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column (type="integer")
     */
  private  $id;
    /**
     * @ORM\Column (type="string")
     */
  private  $username;


  /**
   * @ORM\Column (type="string")
   */
   private  $password;

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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
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