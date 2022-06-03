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

    public function create(){

    }
}