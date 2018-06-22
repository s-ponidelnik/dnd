<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 17:20
 */

namespace App\Core\Entity\Item;
use App\Core\Entity\Core\AligmentCollection;
use App\Core\Entity\GameClassCollection;
use App\Core\Entity\RaceCollection;


/**
 * Class Inventory
 * @package App\Core\Entity\Item
 */
class Inventory extends Item implements InventoryInterface
{
    /**
     * @var GameClassCollection
     */
    protected $classFilter;
    /**
     * @var RaceCollection
     */
    protected $raceFilter;
    /**
     * @var AligmentCollection
     */
    protected $aligmentFilter;
    /**
     * @var
     */
    protected $abilityFilter;
}