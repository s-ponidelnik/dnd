<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 11:11
 */

namespace App\Core\Entity\Core;


use App\Entity\ObjectCollection;

class PortraitCollection extends ObjectCollection
{
    public function __construct(array $elements = [])
    {
        parent::__construct(Portrait::class, $elements);
    }
}