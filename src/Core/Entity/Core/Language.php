<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 16:18
 */

namespace App\Core\Entity\Core;


use App\Core\Entity\RaceCollection;

class Language
{
    /** @var string */
    protected $name;
    /** @var RaceCollection */
    protected $races;
    /** @var string */
    protected $description;
    /** @var Language */
    protected $parentLanguage;
}