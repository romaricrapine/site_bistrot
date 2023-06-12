<?php

namespace App\Repository;

use App\Entity\Informations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Informations>
 *
 * @method Informations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Informations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Informations[]    findAll()
 * @method Informations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Informations::class);
    }

    public function save(Informations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Informations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

}
