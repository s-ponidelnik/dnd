<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:17
 */

namespace App\Core\Entity;


use App\Core\Entity\Core\Source;

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
     * @var AbilityScoreBonusCollection
     */
    private $allAbilityScoreBonuses;

    public function getMainRace(): ?Race
    {
        return $this->parentRace;
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
}