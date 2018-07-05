<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 05/07/2018
 * Time: 13:15
 */

namespace App\Core\Entity\Core\Repository;


use App\Core\Entity\Core\GameRule;
use Symfony\Bridge\Doctrine\RegistryInterface;
class GameRuleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GameRule::class);
    }
}