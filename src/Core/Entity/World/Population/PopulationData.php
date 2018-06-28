<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:51
 */

namespace App\Core\Entity\World\Population;


use App\Core\Entity\Core\Alignment;
use App\Core\Entity\Core\CharacterGender;
use App\Core\Entity\Race;

class PopulationData
{
    /** @var Race */
    protected $race;
    /** @var int */
    protected $age;
    /** @var Alignment */
    protected $Alignment;
    /** @var CharacterGender */
    protected $gender;
    /** @var int */
    protected $amount;

    public function getRace(): Race
    {
        return $this->race;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}