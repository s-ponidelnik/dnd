<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 16:23
 */

namespace App\Core\Entity\Core;


use App\Entity\ObjectCollection;

class LanguageProfiencyCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(LanguageProficiency::class, $elements);
    }
}