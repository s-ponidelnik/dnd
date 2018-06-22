<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 17:24
 */

namespace App\Core\Entity;


class AbilityFilter
{
    /**
     * @var Ability
     */
    protected $ability;
    /**
     * @var int
     */
    protected $minValue;

    public function setMinValue(int $minValue):void{
        $this->minValue = $minValue;
    }

}