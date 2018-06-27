<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 09:38
 */

namespace App\Core\Entity\Core;


class GameRuleMechanic
{
    /** @var string */
    protected $onClass = '\App\Core\Entity\Character';

    /** @var string */
    protected $onMethod = 'getAc';

    public function mechanic()
    {

    }
}