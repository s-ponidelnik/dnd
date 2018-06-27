<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 09:34
 */

namespace App\Core\Entity;


use App\Core\Entity\Core\LanguageProfiencyCollection;
use App\Core\Entity\Spell\SpellCollection;

class CharacterMemory
{
    /** @var LanguageProfiencyCollection */
    protected $languages;
    /** @var SpellCollection */
    protected $spells;
}