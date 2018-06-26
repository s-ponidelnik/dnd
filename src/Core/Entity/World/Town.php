<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:45
 */

namespace App\Core\Entity\World;


use App\Core\Entity\World\Population\Population;

class Town extends GeoObject
{
    const TYPE = 'TOWN';
    /** @var Population */
    protected $population;

}