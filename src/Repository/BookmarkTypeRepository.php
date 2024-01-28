<?php

namespace App\Repository;

use App\Entity\BookmarkType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BookmarkType>
 *
 * @method BookmarkType|null find($id, $lockMode = null, $lockVersion = null)
 * @method BookmarkType|null findOneBy(array $criteria, array $orderBy = null)
 * @method BookmarkType[]    findAll()
 * @method BookmarkType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookmarkTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BookmarkType::class);
    }

//    /**
//     * @return BookmarkType[] Returns an array of BookmarkType objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BookmarkType
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
