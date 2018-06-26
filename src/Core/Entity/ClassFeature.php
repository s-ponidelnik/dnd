<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:25
 */

namespace App\Core\Entity;


class ClassFeature
{
    /** @var GameClass|SubClass */
    protected $class;

    /** @var Feature */
    protected $feature;

    /** @var int */
    protected $level;
}