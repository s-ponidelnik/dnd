<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:17
 */

namespace App\Core\Entity;
use App\Core\Entity\Item\ItemCollection;

/**
 * Class Character
 * @package App\Core\Entity
 */
class Character
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var int
     */
    protected $speed;
    /**
     * @var int
     */
    protected $ac;
    /**
     * @var int
     */
    protected $hp;
    /**
     * @var int
     */
    protected $maxHp;
    /**
     * @var Race
     */
    protected $race;
    /**
     * @var CharacterClassCollection
     */
    protected $classes;
    /**
     * @var CharacterAbilityCollection
     */
    protected $abilities;
    /**
     * @var CharacterSkillCollection
     */
    protected $skils;
    /**
     * @var ItemCollection
     */
    protected $items;
    /**
     * @var CharacterEquipment
     */
    protected $equipment;
}