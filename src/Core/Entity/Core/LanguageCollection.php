<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 16:19
 */

namespace App\Core\Entity\Core;


use App\Entity\ObjectCollection;

class LanguageCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(Language::class, $elements);
    }
}