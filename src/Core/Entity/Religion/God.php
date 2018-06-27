<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 11:07
 */

namespace App\Core\Entity\Religion;


use App\Core\Entity\Core\Aligment;
use App\Core\Entity\Core\AligmentCollection;
use App\Core\Entity\Core\PortraitCollection;
use App\Core\Entity\Core\SignCollection;
use App\Core\Entity\Item\Weapon;
use App\Core\Entity\World\Plan;

class God
{
    /** @var GodNameCollection */
    protected $names;

    /** @var Aligment */
    protected $aligment;

    /** @var AligmentCollection */
    protected $acolyteAligments;

    /** @var Weapon */
    protected $favoriteWeapon;

    /** @var  PortraitCollection|null */
    protected $portraits;

    /** @var Plan|null */
    protected $homePlan;

    /** @var SignCollection */
    protected $signs;

}