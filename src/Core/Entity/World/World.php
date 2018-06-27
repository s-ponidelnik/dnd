<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 11:05
 */

namespace App\Core\Entity\World;


use App\Core\Entity\Religion\ReligionCollection;

class World
{
    /** @var ReligionCollection */
    protected $religions;
    /** @var RegionCollection */
    private $regions;
    /** @var GeoObjectCollection */
    private $geoObjects;

    public function getGeoObjects(): ?GeoObjectCollection
    {
        return $this->geoObjects;
    }

    public function getRegions(): ?RegionCollection
    {
        return $this->regions;
    }
}