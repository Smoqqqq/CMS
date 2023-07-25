<?php

namespace App\Repository\Page;

use App\Entity\Page\Moodboard1Block;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Moodboard1Block>
 *
 * @method Moodboard1Block|null find($id, $lockMode = null, $lockVersion = null)
 * @method Moodboard1Block|null findOneBy(array $criteria, array $orderBy = null)
 * @method Moodboard1Block[]    findAll()
 * @method Moodboard1Block[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Moodboard1BlockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Moodboard1Block::class);
    }

    public function save(Moodboard1Block $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Moodboard1Block $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Moodboard1Block[] Returns an array of Moodboard1Block objects
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

//    public function findOneBySomeField($value): ?Moodboard1Block
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
