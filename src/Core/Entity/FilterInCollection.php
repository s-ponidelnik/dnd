<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 17:44
 */

namespace App\Core\Entity;


abstract class FilterInCollection extends Filter
{
    static $FILTER_TYPE = self::IN_COLLECTION;
}