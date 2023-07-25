<?php

namespace App\Repository\Page;

use App\Entity\Page\DualImageTitleBlock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DualImageTitleBlock>
 *
 * @method DualImageTitleBlock|null find($id, $lockMode = null, $lockVersion = null)
 * @method DualImageTitleBlock|null findOneBy(array $criteria, array $orderBy = null)
 * @method DualImageTitleBlock[]    findAll()
 * @method DualImageTitleBlock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DualImageTitleBlockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DualImageTitleBlock::class);
    }

    public function save(DualImageTitleBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DualImageTitleBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DualImageTitleBlock[] Returns an array of DualImageTitleBlock objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DualImageTitleBlock
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
