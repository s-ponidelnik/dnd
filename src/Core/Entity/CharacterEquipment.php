<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:46
 */

namespace App\Core\Entity;


use App\Core\Entity\Item\Amulet;
use App\Core\Entity\Item\BodyArmor;
use App\Core\Entity\Item\Cap;
use App\Core\Entity\Item\Cloth;
use App\Core\Entity\Item\Ring;
use App\Core\Entity\Item\Shield;
use App\Core\Entity\Item\Weapon;

class CharacterEquipment
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var Character
     */
    protected $character;
    /**
     * @var Shield|Weapon|null
     */
    protected $leftHand = null;
    /**
     * @var Weapon|null
     */
    protected $rightHand = null;
    /**
     * @var Cap|null
     */
    protected $cap = null;

    /**
     * @var Amulet|null
     */
    protected $amulet = null;

    /**
     * @var Ring|null
     */
    protected $leftHandRing = null;

    /**
     * @var Ring|null
     */
    protected $rightHandRing = null;
    /**
     * @var BodyArmor|null
     */
    protected $bodyArmor = null;
    /**
     * @var Cloth|null
     */
    protected $cloth = null;
}