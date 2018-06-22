<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:57
 */

namespace App\Core\Entity\Spell;

use App\Core\Entity\GameClass;

/**
 * Class SpellList
 * @package App\Core\Entity\Spell
 */
class SpellList
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var GameClass
     */
    protected $characterClass;

    /**
     * @var int
     */
    protected $classLevel;

    /**
     * @var Spell
     */
    protected $spell;
}