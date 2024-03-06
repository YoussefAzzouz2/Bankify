<?php

namespace App\Repository;

use App\Entity\Remboursement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Remboursement>
 *
 * @method Remboursement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Remboursement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Remboursement[]    findAll()
 * @method Remboursement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RemboursementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Remboursement::class);
    }

    public function triParDate($credit, $ordre)
    {
        $queryBuilder = $this->createQueryBuilder('r')
            ->andWhere('r.credit = :credit')
            ->setParameter('credit', $credit);

        if ($ordre === 'ascendant') {
            $queryBuilder->orderBy('r.dateR', 'ASC')
                         ->addOrderBy('r.montantRestant', 'DESC');
        } else {
            $queryBuilder->orderBy('r.dateR', 'DESC')
                         ->addOrderBy('r.montantRestant', 'ASC');
        }

        return $queryBuilder->getQuery()->getResult();
    }

//    /**
//     * @return Remboursement[] Returns an array of Remboursement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Remboursement
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
