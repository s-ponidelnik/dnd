<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 05/07/2018
 * Time: 15:16
 */

namespace App\Core\Entity\Core\Repository;


use App\Core\Entity\Core\Description;
use Symfony\Bridge\Doctrine\RegistryInterface;
class DescriptionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Description::class);
    }
}