<?php


namespace alomedBundle\Repository;


use Doctrine\ORM\EntityRepository;

class PatientRepository extends EntityRepository
{
    public function getUserByUsernameAndPassword(string $email, string $password)
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