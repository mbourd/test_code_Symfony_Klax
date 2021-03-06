<?php

namespace App\Repository;

use App\Entity\LinkVimeo;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * @method LinkVideo|null find($id, $lockMode = null, $lockVersion = null)
 * @method LinkVideo|null findOneBy(array $criteria, array $orderBy = null)
 * @method LinkVideo[]    findAll()
 * @method LinkVideo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LinkVideoRepository extends ServiceEntityRepository
{
    /**
     * @param \Doctrine\Persistence\ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LinkVimeo::class);
    }
}
