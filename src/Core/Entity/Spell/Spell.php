<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:56
 */

namespace App\Core\Entity\Spell;
use App\Core\Entity\Core\Source;

/**
 * Class Spell
 * @package App\Core\Entity\Spell
 */
class Spell
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var SpellSchool
     */
    protected $spellSchool;
    /**
     * @var string
     */
    protected $level;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var Source
     */
    protected $source;
}