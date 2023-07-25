<?php

namespace App\Repository\RecurrentBlock;

use App\Entity\RecurrentBlock\NavbarBlock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NavbarBlock>
 *
 * @method NavbarBlock|null find($id, $lockMode = null, $lockVersion = null)
 * @method NavbarBlock|null findOneBy(array $criteria, array $orderBy = null)
 * @method NavbarBlock[]    findAll()
 * @method NavbarBlock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NavbarBlockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NavbarBlock::class);
    }

    public function save(NavbarBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(NavbarBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return NavbarBlock[] Returns an array of NavbarBlock objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NavbarBlock
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
