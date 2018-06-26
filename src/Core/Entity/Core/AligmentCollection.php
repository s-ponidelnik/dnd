<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:21
 */

namespace App\Core\Entity\Core;

use App\Entity\CollectionInterface;
use App\Entity\ObjectCollection;

class AligmentCollection extends ObjectCollection implements CollectionInterface
{
    public function __construct(array $elements = [])
    {
        parent::__construct(Aligment::class, $elements);
    }
}