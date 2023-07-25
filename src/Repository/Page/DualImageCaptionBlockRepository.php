<?php

namespace App\Repository\Page;

use App\Entity\Page\DualImageCaptionBlock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DualImageCaptionBlock>
 *
 * @method DualImageCaptionBlock|null find($id, $lockMode = null, $lockVersion = null)
 * @method DualImageCaptionBlock|null findOneBy(array $criteria, array $orderBy = null)
 * @method DualImageCaptionBlock[]    findAll()
 * @method DualImageCaptionBlock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DualImageCaptionBlockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DualImageCaptionBlock::class);
    }

    public function save(DualImageCaptionBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DualImageCaptionBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DualImageCaptionBlock[] Returns an array of DualImageCaptionBlock objects
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

//    public function findOneBySomeField($value): ?DualImageCaptionBlock
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
