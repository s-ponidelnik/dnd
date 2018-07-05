<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 05/07/2018
 * Time: 13:15
 */

namespace App\Core\Entity\Core\Repository;


use App\Core\Entity\Core\Source;
use Symfony\Bridge\Doctrine\RegistryInterface;
class SourceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Source::class);
    }
    /**
     * @param $sourceName
     * @return Source
     */
    public function findSourceByName($sourceName): Source
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('s')
            ->andWhere('s.name = :name')
            ->setParameter('name', $sourceName)
            ->getQuery();

         $source = $qb->setMaxResults(1)->getOneOrNullResult();
    }

    public function findAllOfficial():array
    {
        $qb = $this->createQueryBuilder('s')
            ->andWhere('s.offical = :offical')
            ->setParameter('offical', true)
            ->getQuery();
        return $qb->execute();
    }
}