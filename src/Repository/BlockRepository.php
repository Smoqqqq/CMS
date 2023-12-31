<?php

namespace App\Repository;

use App\Entity\Block;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Block>
 *
 * @method Block|null find($id, $lockMode = null, $lockVersion = null)
 * @method Block|null findOneBy(array $criteria, array $orderBy = null)
 * @method Block[]    findAll()
 * @method Block[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Block::class);
    }

    public function save(Block $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Block $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findBlocksToMoveUp(int $initialPosition, Block $block)
    {
        return $this->createQueryBuilder("b")
            ->where("b.page = :page")
            ->andWhere("b.position >= :initialPosition")
            ->andWhere("b.position < :currentPosition")
            ->setParameters([
                "page" => $block->getPage(),
                "initialPosition" => $initialPosition,
                "currentPosition" => $block->getPosition(),
            ])
            ->getQuery()
            ->getResult();
    }
    
    public function findBlocksToMoveDown(int $initialPosition, Block $block)
    {
        return $this->createQueryBuilder("b")
            ->where("b.page = :page")
            ->andWhere("b.position <= :initialPosition")
            ->andWhere("b.position > :currentPosition")
            ->setParameters([
                "page" => $block->getPage(),
                "initialPosition" => $initialPosition,
                "currentPosition" => $block->getPosition(),
            ])
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return Block[] Returns an array of Block objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('g')
    //            ->andWhere('g.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('g.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Block
    //    {
    //        return $this->createQueryBuilder('g')
    //            ->andWhere('g.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
