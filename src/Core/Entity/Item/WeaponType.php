<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 09:25
 */

namespace App\Core\Entity\Item;


use App\Core\Entity\Ability;

class WeaponType
{
    /** @var string */
    protected $name;
    /** @var Ability */
    protected $ability;
}