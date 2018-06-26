<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:45
 */

namespace App\Core\Entity\World;


use App\Core\Entity\Core\LanguageCollection;
use App\Core\Entity\World\Population\Population;
use App\Core\Entity\World\Population\PopulationData;

class Town extends GeoObject
{
    const TYPE = 'TOWN';

    /** @var Population|null */
    protected $population;

    /** @var RullerCollection|null */
    protected $rullers;

    /** @var LanguageCollection|null */
    protected $languages;

    public function getLanguages(): LanguageCollection
    {
        if (!$this->languages) {
            $this->languages = new LanguageCollection();
            /** @var PopulationData $population */
            foreach ($this->population as $population) {
                if ($population->getRace() && $population->getRace()->getLanguages()) {
                    foreach ($population->getRace()->getLanguages() as $language) {
                        $this->languages->add($language);
                    }
                }
            }
        }
        return $this->languages;
    }
}