<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:38
 */

namespace App\Core\Entity\World;


use App\Core\Entity\Core\Description;

class Region extends LocationArea
{
    /** @var string */
    protected $name;
    /** @var Description */
    protected $description;
    /** @var GeoObjectCollection */
    protected $geoObjects;
}