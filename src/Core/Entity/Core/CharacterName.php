<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:31
 */

namespace App\Core\Entity\Core;


use App\Core\Entity\RaceCollection;
use App\Core\Entity\World\GeoObject;
use App\Core\Entity\World\RegionCollection;

class CharacterName
{
    protected $name;
    /** @var string */
    protected $childName;
    /** @var string */
    protected $adultName;
    /** @var string */
    protected $shortName;
    /** @var CharacterGender|null */
    protected $gender;
    /** @var string */
    protected $description;
    /** @var RaceCollection */
    protected $races;
    /** @var RegionCollection */
    protected $regions;
    /** @var GeoObject */
    protected $geoObjects;
    /** @var AligmentCollection */
    protected $aligments;

}