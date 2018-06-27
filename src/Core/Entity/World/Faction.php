<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 09:27
 */

namespace App\Core\Entity\World;


use App\Core\Entity\CharacterCollection;
use App\Core\Entity\Core\Aligment;

class Faction
{
    /** @var string */
    protected $name;
    /** @var string */
    protected $description;
    /** @var  $sing Faction Symbol */
    protected $sing;
    /** @var Aligment */
    protected $aligment;
    /** @var CharacterCollection */
    protected $members;
}