<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 11:37
 */

namespace App\Core\Entity\Core;


class Alphabet
{
    /** @var string */
    protected $name;

    /** @var LanguageCollection */
    protected $languages;

    /** @var Picture|null */
    protected $alphabet;
}