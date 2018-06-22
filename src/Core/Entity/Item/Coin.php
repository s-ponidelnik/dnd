<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:38
 */

namespace App\Core\Entity\Item;


class Coin extends Item implements CoinInterface
{
    const TYPE = 'COIN';

    /**
     * @var CointType
     */
    protected $cointType;
}