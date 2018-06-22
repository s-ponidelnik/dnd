<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 10:16
 */

namespace App\Core\Entity\Dice\Types;


/**
 * Class D100
 * @package App\Core\Entity\Dice\Types
 */
class D100 extends DiceType
{
    /**
     * @var int
     */
    protected $max = 100;

    /**
     * @return string
     */
    public function __toString()
    {
        return 'd100';
    }
}