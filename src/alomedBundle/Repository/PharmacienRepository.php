<?php


namespace alomedBundle\Repository;


use Doctrine\ORM\EntityRepository;

class PharmacienRepository extends EntityRepository
{
    public function getpharByUsernameAndPassword(string $email, string $password)
    {
        $qb = $this->createQueryBuilder('u')
            ->andWhere('u.email = :email')
            ->andWhere('u.password LIKE :password')
            ->setParameter('email',  $email )
            ->setParameter('password',  $password )
            ->getQuery();


        return $qb->getResult();
    }





}