<?php

namespace App\Repository\Page;

use App\Entity\Page\EmpathyMapBlock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EmpathyMapBlock>
 *
 * @method EmpathyMapBlock|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmpathyMapBlock|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmpathyMapBlock[]    findAll()
 * @method EmpathyMapBlock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmpathyMapBlockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmpathyMapBlock::class);
    }

    public function save(EmpathyMapBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EmpathyMapBlock $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EmpathyMapBlock[] Returns an array of EmpathyMapBlock objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EmpathyMapBlock
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
