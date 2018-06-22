<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:17
 */

namespace App\Core\Entity;

use App\Core\Entity\Core\Aligment;
use App\Entity\Color;

/**
 * Class Character
 * @package App\Core\Entity
 */
class Character
{
    /**
     * @var ProficiencyBonus
     */
    protected $proficiencyBonus;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var int
     */
    protected $speed;
    /**
     * @var int
     */
    protected $ac;
    /**
     * @var int
     */
    protected $hp;
    /**
     * @var int
     */
    protected $maxHp;
    /**
     * @var Race
     */
    protected $race;
    /**
     * @var CharacterClassCollection
     */
    protected $classes;
    /**
     * @var CharacterAbilityCollection
     */
    protected $abilities;
    /**
     * @var CharacterSkillCollection
     */
    protected $skils;
    /**
     * @var CharacterItemCollection
     */
    protected $items;
    /**
     * @var CharacterEquipment
     */
    protected $equipment;
    /**
     * @var int
     */
    protected $level;
    /**
     * @var CharacterFeatCollection
     */
    protected $feats;

    /**
     * @var float
     */
    protected $weight;
    /**
     * @var float
     */
    protected $height;

    /**
     * @var Color
     */
    protected $eyeColor;

    /**
     * @var Color
     */
    protected $hairColor;

    /**
     * @var int|null
     */
    protected $temporaryHp;

    /**
     * @var Aligment
     */
    protected $aligment;

    public function getAligment(): Aligment
    {
        return $this->aligment;
    }

    public function setAligment(Aligment $aligment): void
    {
        $this->aligment = $aligment;
    }

    public function setTmpHp(int $temporaryHp): void
    {
        $this->temporaryHp = $temporaryHp;
    }

    public function getTemporaryHp(): ?int
    {
        $this->temporaryHp;
    }

    public function setEyeColor(Color $color): void
    {
        $this->eyeColor = $color;
    }

    public function getEyeColor(): Color
    {
        return $this->eyeColor;
    }

    public function setHairColor(Color $color): void
    {
        $this->hairColor = $color;
    }

    public function getHairColor(): Color
    {
        return $this->hairColor;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getItems(): ?CharacterItemCollection
    {
        return $this->items;
    }

    public function getAbilities(): CharacterAbilityCollection
    {
        return $this->abilities;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function getProficiencyBonus(): int
    {
        return $this->proficiencyBonus->getValue();
    }

    public function getRace(): Race
    {
        return $this->race;
    }

    public function getFeats(): ?CharacterFeatCollection
    {
        return $this->feats;
    }

    public function getEquipment(): ?CharacterEquipment
    {
        return $this->equipment;
    }

}