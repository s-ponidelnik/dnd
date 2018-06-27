<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 09:58
 */

namespace App\Core\Entity;


use App\Entity\ObjectCollection;

class CharacterSavingThrowCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(CharacterSavingThrow::class, $elements);
    }
}