<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:17
 */

namespace App\Core\Entity;


use App\Core\Entity\Core\AlignmentCollection;
use App\Core\Entity\Core\LanguageCollection;
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
     * @var AlignmentCollection
     */
    protected $Alignments;
    /**
     * @var AbilityScoreBonusCollection
     */
    protected $allAbilityScoreBonuses;

    /** @var bool */
    protected $playable;

    /** @var LanguageCollection */
    protected $languages;

    /** @var int */
    protected $size;

    public function getLanguages(): LanguageCollection
    {
        return $this->languages;
    }

    public function getAlignments(): AlignmentCollection
    {
        return $this->Alignments;
    }

    public function setAlignments(AlignmentCollection $AlignmentCollection): void
    {
        $this->Alignments = $AlignmentCollection;
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