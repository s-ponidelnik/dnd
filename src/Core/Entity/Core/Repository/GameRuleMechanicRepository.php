<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 05/07/2018
 * Time: 15:12
 */

namespace App\Core\Entity\Core\Repository;

use App\Core\Entity\Core\GameRuleMechanic;
use Symfony\Bridge\Doctrine\RegistryInterface;
class GameRuleMechanicRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GameRuleMechanic::class);
    }
}