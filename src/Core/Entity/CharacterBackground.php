<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 16:14
 */

namespace App\Core\Entity;


use App\Core\Entity\Core\Description;
use App\Core\Entity\Core\LanguageProfiencyCollection;

class CharacterBackground
{
    /** @var Description */
    protected $description;
    /** @var SkillBonusCollection */
    protected $skills;
    /** @var LanguageProfiencyCollection */
    protected $languages;
    /** @var FeatureCollection */
    protected $features;

    protected $equipment;

    protected $personalTraits;

    protected $ideal;

    protected $bond;

    protected $flaw;
}