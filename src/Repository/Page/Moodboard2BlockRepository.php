<?php

namespace App\Repository\Page;

use App\Entity\Page\Moodboard2Block;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Moodboard2Block>
 *
 * @method Moodboard2Block|null find($id, $lockMode = null, $lockVersion = null)
 * @method Moodboard2Block|null findOneBy(array $criteria, array $orderBy = null)
 * @method Moodboard2Block[]    findAll()
 * @method Moodboard2Block[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Moodboard2BlockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Moodboard2Block::class);
    }

    public function save(Moodboard2Block $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Moodboard2Block $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Moodboard2Block[] Returns an array of Moodboard2Block objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Moodboard2Block
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
