<?php

namespace App\Repository;

use App\Entity\CategoryExpeneses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CategoryExpeneses>
 *
 * @method CategoryExpeneses|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryExpeneses|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryExpeneses[]    findAll()
 * @method CategoryExpeneses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryExpenesesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryExpeneses::class);
    }

    public function add(CategoryExpeneses $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CategoryExpeneses $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CategoryExpeneses[] Returns an array of CategoryExpeneses objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CategoryExpeneses
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
