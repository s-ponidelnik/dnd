<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 17:20
 */

namespace App\Core\Entity\Item;

use App\Core\Entity\AbilityFilter;
use App\Core\Entity\AligmentFilter;
use App\Core\Entity\ClassFilter;
use App\Core\Entity\RaceFilter;


/**
 * Class Inventory
 * @package App\Core\Entity\Item
 */
class Inventory extends Item implements InventoryInterface
{
    /**
     * @var ClassFilter
     */
    protected $classFilter;
    /**
     * @var RaceFilter
     */
    protected $raceFilter;
    /**
     * @var AligmentFilter
     */
    protected $aligmentFilter;
    /**
     * @var AbilityFilter
     */
    protected $abilityFilter;

    public function setAbilityFilter(AbilityFilter $abilityFilter): void
    {
        $this->aligmentFilter = $abilityFilter;
    }

    public function getAbilityFilter(): ?AbilityFilter
    {
        return $this->abilityFilter;
    }

    public function setAligmentFilter(AligmentFilter $aligmentFilter): void
    {
        $this->aligmentFilter = $aligmentFilter;
    }

    public function getAligmentFilter(): ?AligmentFilter
    {
        return $this->aligmentFilter;
    }

    public function setRaceFilter(RaceFilter $raceFilter): void
    {
        $this->raceFilter = $raceFilter;
    }

    public function getRaceFilter(): ?RaceFilter
    {
        return $this->raceFilter;
    }

    public function setClassFilter(ClassFilter $classFilter): void
    {
        $this->classFilter = $classFilter;
    }

    public function getClassFilter(): ?ClassFilter
    {
        return $this->classFilter;
    }

}