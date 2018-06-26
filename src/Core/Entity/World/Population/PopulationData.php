<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:51
 */

namespace App\Core\Entity\World\Population;


use App\Core\Entity\GameYear;
use App\Core\Entity\Race;

class PopulationData
{
    /** @var Race */
    protected $race;
    /** @var int */
    protected $age;
    /** @var int */
    protected $amount;
    /** @var GameYear */
    protected $year;
}