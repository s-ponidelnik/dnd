<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 09:35
 */

namespace App\Core\Entity;


use App\Core\Entity\World\Faction;

class CharacterFactionRelation
{
    /** @var Faction */
    protected $faction;
    /** @var Character */
    protected $character;
    /** @var int */
    protected $relation;
}