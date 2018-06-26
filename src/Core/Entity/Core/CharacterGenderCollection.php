<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:37
 */

namespace App\Core\Entity\Core;


use App\Entity\ObjectCollection;

class CharacterGenderCollection extends ObjectCollection
{
    public function __construct(string $className, array $elements = [])
    {
        parent::__construct(CharacterGender::class, $elements);
    }
}