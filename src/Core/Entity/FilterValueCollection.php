<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 17:45
 */

namespace App\Core\Entity;


abstract class FilterValueCollection extends Filter
{
    static $FILTER_TYPE = self::VALUE_COLLECTION;
}