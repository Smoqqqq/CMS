<?php

namespace App\Repository\Page;

use App\Entity\Page\SingleLinkBlock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SingleLinkBlock>
 *
 * @method SingleLinkBlock|null find($id, $lockMode = null, $lockVersion = null)
 * @method SingleLinkBlock|null findOneBy(array $criteria, array $orderBy = null)
 * @method SingleLinkBlock[]    findAll()
 * @method SingleLinkBlock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SingleLinkBlockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SingleLinkBlock::class);
    }

    public function save(SingleLinkBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SingleLinkBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SingleLinkBlock[] Returns an array of SingleLinkBlock objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SingleLinkBlock
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
