<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:17
 */

namespace App\Core\Entity;


use App\Core\Entity\Core\AligmentCollection;
use App\Core\Entity\Core\Source;
use App\Entity\ColorCollection;

/**
 * Class Race
 * @package App\Core\Entity
 */
class Race
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var Race
     */
    protected $parentRace;
    /**
     * @var Source
     */
    protected $source;
    /**
     * @var AbilityScoreBonusCollection
     */
    protected $abilityScoreBonuses;
    /**
     * @var ColorCollection
     */
    protected $eyeColors;
    /**
     * @var int|null
     */
    protected $adultAge;
    /**
     * @var int|null
     */
    protected $maxAge;
    /**
     * @var ColorCollection
     */
    protected $hairColors;
    /**
     * @var AligmentCollection
     */
    protected $aligments;
    /**
     * @var AbilityScoreBonusCollection
     */
    private $allAbilityScoreBonuses;

    public function getAligments(): AligmentCollection
    {
        return $this->aligments;
    }

    public function setAligments(AligmentCollection $aligmentCollection): void
    {
        $this->aligments = $aligmentCollection;
    }

    public function getMaxAge(): ?int
    {
        return $this->maxAge;
    }

    public function setMaxAge(int $age): void
    {
        $this->maxAge = $age;
    }

    public function getAdultAge(): ?int
    {
        return $this->adultAge;
    }

    public function setAdultAge(int $age): void
    {
        $this->adultAge = $age;
    }

    public function setEyeColors(ColorCollection $colorCollection): void
    {
        $this->eyeColors = $colorCollection;
    }

    public function getHairColors(): ?ColorCollection
    {
        return $this->hairColors;
    }

    public function setHairColors(ColorCollection $colorCollection): void
    {
        $this->hairColors = $colorCollection;
    }

    public function getEyeColor(): ?ColorCollection
    {
        return $this->eyeColors;
    }

    public function getAbilityScoreBonuses(): AbilityScoreBonusCollection
    {
        if ($this->allAbilityScoreBonuses)
            return $this->allAbilityScoreBonuses;

        if (!$this->getMainRace())
            return $this->abilityScoreBonuses;

        $this->abilityScoreBonuses = clone $this->abilityScoreBonuses;
        foreach ($this->getMainRace()->getAbilityScoreBonuses() as $key => $value) {
            if ($this->abilityScoreBonuses->containsKey($key)) {
                $value = $value + $this->abilityScoreBonuses->get($key);
            }
            $this->abilityScoreBonuses->set($key, $value);
        }
        return $this->abilityScoreBonuses;
    }

    public function getMainRace(): ?Race
    {
        return $this->parentRace;
    }
}