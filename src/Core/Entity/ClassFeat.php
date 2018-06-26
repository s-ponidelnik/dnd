<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:25
 */

namespace App\Core\Entity;


class ClassFeat
{
    /** @var GameClass|SubClass */
    protected $class;

    /** @var Feat */
    protected $feat;

    /** @var int */
    protected $level;
}