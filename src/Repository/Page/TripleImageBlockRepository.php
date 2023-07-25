<?php

namespace App\Repository\Page;

use App\Entity\Page\TripleImageBlock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TripleImageBlock>
 *
 * @method TripleImageBlock|null find($id, $lockMode = null, $lockVersion = null)
 * @method TripleImageBlock|null findOneBy(array $criteria, array $orderBy = null)
 * @method TripleImageBlock[]    findAll()
 * @method TripleImageBlock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TripleImageBlockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TripleImageBlock::class);
    }

    public function save(TripleImageBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TripleImageBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TripleImageBlock[] Returns an array of TripleImageBlock objects
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

//    public function findOneBySomeField($value): ?TripleImageBlock
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
