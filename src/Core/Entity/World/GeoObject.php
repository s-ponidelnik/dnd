<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:39
 */

namespace App\Core\Entity\World;


use App\Core\Entity\Core\Description;

abstract class GeoObject
{
    const TYPE = 'OBJECT';

    /** @var Location */
    protected $location;

    /** @var string */
    protected $name;

    /** @var Description */
    protected $description;

    /** @var GeoObjectCollection|null */
    protected $objects;
}