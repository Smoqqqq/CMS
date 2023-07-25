<?php

namespace App\Repository\Page;

use App\Entity\Page\TripleImageCaptionBlock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TripleImageCaptionBlock>
 *
 * @method TripleImageCaptionBlock|null find($id, $lockMode = null, $lockVersion = null)
 * @method TripleImageCaptionBlock|null findOneBy(array $criteria, array $orderBy = null)
 * @method TripleImageCaptionBlock[]    findAll()
 * @method TripleImageCaptionBlock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TripleImageCaptionBlockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TripleImageCaptionBlock::class);
    }

    public function save(TripleImageCaptionBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TripleImageCaptionBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TripleImageCaptionBlock[] Returns an array of TripleImageCaptionBlock objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TripleImageCaptionBlock
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
