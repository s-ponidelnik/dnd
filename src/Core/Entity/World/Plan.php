<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 11:12
 */

namespace App\Core\Entity\World;


class Plan extends World
{
    /** @var RegionCollection */
    private $regions;

    /** @var GeoObjectCollection */
    private $geoObjects;

    public function getRegions(): ?RegionCollection
    {
        return $this->regions;
    }
    public function getGeoObjects(): ?GeoObjectCollection
    {
        return $this->geoObjects;
    }
}