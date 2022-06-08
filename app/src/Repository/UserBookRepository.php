<?php

namespace App\Repository;

use App\Entity\UserBook;

/**
 * UserBookRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserBookRepository extends \Doctrine\ORM\EntityRepository
{
    public function add(UserBook $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findById(int $id): ?UserBook
    {
        return $this->findOneBy(['id' => $id]);
    }

    public function findByBookId(int $bookId): ?UserBook
    {
        return $this->findOneBy(['bookId' => $bookId]);
    }

    public function delete(UserBook $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findOneByToken($value): ?UserBook
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.token = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
}
