<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 16:39
 */

namespace App\Core\Entity;


use App\Entity\ObjectCollection;

class CharacterCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(Character::class, $elements);
    }
}