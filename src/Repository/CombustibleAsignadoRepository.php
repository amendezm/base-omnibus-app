<?php

namespace App\Repository;

use App\Entity\CombustibleAsignado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CombustibleAsignado|null find($id, $lockMode = null, $lockVersion = null)
 * @method CombustibleAsignado|null findOneBy(array $criteria, array $orderBy = null)
 * @method CombustibleAsignado[]    findAll()
 * @method CombustibleAsignado[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CombustibleAsignadoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CombustibleAsignado::class);
    }

    // /**
    //  * @return CombustibleAsignado[] Returns an array of CombustibleAsignado objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CombustibleAsignado
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
