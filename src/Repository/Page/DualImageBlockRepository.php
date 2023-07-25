<?php

namespace App\Repository\Page;

use App\Entity\Page\DualImageBlock;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<DualImageBlock>
 *
 * @method DualImageBlock|null find($id, $lockMode = null, $lockVersion = null)
 * @method DualImageBlock|null findOneBy(array $criteria, array $orderBy = null)
 * @method DualImageBlock[]    findAll()
 * @method DualImageBlock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DualImageBlockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DualImageBlock::class);
    }

    public function save(DualImageBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DualImageBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DualImageBlock[] Returns an array of DualImageBlock objects
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

//    public function findOneBySomeField($value): ?DualImageBlock
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
