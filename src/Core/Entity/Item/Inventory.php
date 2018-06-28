<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 17:20
 */

namespace App\Core\Entity\Item;

use App\Core\Entity\AbilityFilter;
use App\Core\Entity\AlignmentFilter;
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
     * @var AlignmentFilter
     */
    protected $AlignmentFilter;
    /**
     * @var AbilityFilter
     */
    protected $abilityFilter;

    public function getAbilityFilter(): ?AbilityFilter
    {
        return $this->abilityFilter;
    }

    public function setAbilityFilter(AbilityFilter $abilityFilter): void
    {
        $this->AlignmentFilter = $abilityFilter;
    }

    public function getAlignmentFilter(): ?AlignmentFilter
    {
        return $this->AlignmentFilter;
    }

    public function setAlignmentFilter(AlignmentFilter $AlignmentFilter): void
    {
        $this->AlignmentFilter = $AlignmentFilter;
    }

    public function getRaceFilter(): ?RaceFilter
    {
        return $this->raceFilter;
    }

    public function setRaceFilter(RaceFilter $raceFilter): void
    {
        $this->raceFilter = $raceFilter;
    }

    public function getClassFilter(): ?ClassFilter
    {
        return $this->classFilter;
    }

    public function setClassFilter(ClassFilter $classFilter): void
    {
        $this->classFilter = $classFilter;
    }

}