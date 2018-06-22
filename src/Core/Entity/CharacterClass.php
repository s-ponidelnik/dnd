<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 09:38
 */

namespace App\Core\Entity;

/**
 * Class CharacterClass
 * @package App\Core\Entity
 */
class CharacterClass extends CharacterRel
{
    /**
     * @var GameClass
     */
    protected $class;
    /**
     * @var int
     */
    protected $level;
}