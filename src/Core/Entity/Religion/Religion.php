<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 11:06
 */

namespace App\Core\Entity\Religion;


use App\Core\Entity\World\FactionCollection;

class Religion
{
    /** @var God */
    protected $god;

    /** @var TempleCollection */
    protected $temples;

    /** @var FactionCollection */
    protected $factions;
}