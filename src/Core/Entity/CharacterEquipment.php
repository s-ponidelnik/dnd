<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:46
 */

namespace App\Core\Entity;

use App\Core\Entity\Item\AmuletInterface;
use App\Core\Entity\Item\BagInterface;
use App\Core\Entity\Item\BodyArmorInterface;
use App\Core\Entity\Item\CapInterface;
use App\Core\Entity\Item\CloakInterface;
use App\Core\Entity\Item\ClothInterface;
use App\Core\Entity\Item\LeftHandItemInterface;
use App\Core\Entity\Item\RightHandInterface;
use App\Core\Entity\Item\RingInterface;

/**
 * Class CharacterEquipment
 * @package App\Core\Entity
 */
class CharacterEquipment extends CharacterRel
{
    /**
     * @var CloakInterface|null
     */
    protected $cloak = null;
    /**
     * @var LeftHandItemInterface|null
     */
    protected $leftHand = null;
    /**
     * @var RightHandInterface|null
     */
    protected $rightHand = null;
    /**
     * @var CapInterface|null
     */
    protected $cap = null;
    /**
     * @var AmuletInterface|null
     */
    protected $amulet = null;
    /**
     * @var RingInterface|null
     */
    protected $leftHandRing = null;
    /**
     * @var RingInterface|null
     */
    protected $rightHandRing = null;
    /**
     * @var BodyArmorInterface|null
     */
    protected $bodyArmor = null;
    /**
     * @var ClothInterface|null
     */
    protected $cloth = null;
    /**
     * @var BagInterface|null
     */
    protected $bag = null;

    public function setBag(BagInterface $item): void
    {
        $this->bag = $item;
    }

    public function getBag(): ?BagInterface
    {
        return $this->bag;
    }

    /**
     * @return CloakInterface|null
     */
    public function getCloak(): ?CloakInterface
    {
        return $this->cloak;
    }

    /**
     * @param CloakInterface $item
     */
    public function setCloak(CloakInterface $item): void
    {
        $this->cloak = $item;
    }

    /**
     * @return ClothInterface|null
     */
    public function getCloth(): ?ClothInterface
    {
        return $this->cloth;
    }

    /**
     * @param ClothInterface $item
     */
    public function setCloth(ClothInterface $item): void
    {
        $this->cloth = $item;
    }

    /**
     * @return BodyArmorInterface|null
     */
    public function getBodyArmor(): ?BodyArmorInterface
    {
        return $this->bodyArmor;
    }

    /**
     * @param BodyArmorInterface $item
     */
    public function setBodyArmor(BodyArmorInterface $item): void
    {
        $this->bodyArmor = $item;
    }

    /**
     * @return RingInterface|null
     */
    public function getRightHandRing(): ?RingInterface
    {
        return $this->rightHandRing;
    }

    /**
     * @param RingInterface $item
     */
    public function setRightHandRing(RingInterface $item): void
    {
        $this->rightHandRing = $item;
    }

    /**
     * @return RingInterface|null
     */
    public function getLeftHandRing(): ?RingInterface
    {
        return $this->leftHandRing;
    }

    /**
     * @param RingInterface $item
     */
    public function setLeftHandRing(RingInterface $item): void
    {
        $this->leftHandRing = $item;
    }

    /**
     * @param AmuletInterface $item
     */
    public function setAmultet(AmuletInterface $item): void
    {
        $this->amulet = $item;
    }

    /**
     * @return AmuletInterface|null
     */
    public function getAmulet(): ?AmuletInterface
    {
        return $this->amulet;
    }

    /**
     * @return CapInterface|null
     */
    public function getCap(): ?CapInterface
    {
        return $this->cap;
    }

    /**
     * @param CapInterface $item
     */
    public function setCap(CapInterface $item): void
    {
        $this->cap = $item;
    }

    /**
     * @return LeftHandItemInterface|null
     */
    public function getLeftHand(): ?LeftHandItemInterface
    {
        return $this->leftHand;
    }

    /**
     * @param LeftHandItemInterface $item
     */
    public function setLeftHand(LeftHandItemInterface $item): void
    {
        $this->leftHand = $item;
    }

    /**
     * @return RightHandInterface|null
     */
    public function getRightHand(): ?RightHandInterface
    {
        return $this->rightHand;
    }

    /**
     * @param RightHandInterface $item
     */
    public function setRightHand(RightHandInterface $item): void
    {
        $this->rightHand = $item;
    }
}