<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 09:27
 */

namespace App\Core\Entity\World;


use App\Core\Entity\CharacterCollection;
use App\Core\Entity\Core\Alignment;
use App\Core\Entity\Core\Description;

class Faction
{
    const TYPE = 'FACTION';

    /** @var string */
    protected $name;

    /** @var Description */
    protected $description;

    /** @var  $sing Faction Symbol */
    protected $sing;

    /** @var Alignment */
    protected $Alignment;

    /** @var CharacterCollection */
    protected $members;
}