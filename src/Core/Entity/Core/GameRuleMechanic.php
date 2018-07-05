<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 09:38
 */

namespace App\Core\Entity\Core;


/**
 * Class GameRuleMechanic
 * @package App\Core\Entity\Core
 * @ORM\Entity(repositoryClass="App\Core\Entity\Core\Repository\GameRuleMechanicRepository")
 */
class GameRuleMechanic
{
    /**
     * @ORM\Column(type="string",length=255)
     * @var string|null
     */
    protected $onClass = '\App\Core\Entity\Character';

    /**
     * @ORM\Column(type="string",length=255)
     * @var string|null
     */
    protected $onMethod = 'getAc';
    /**
     * @var GameRule
     * @ORM\OneToOne(targetEntity="App\Core\Entity\Core\GameRule")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $gameRule;
}