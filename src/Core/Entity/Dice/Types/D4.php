<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 10:16
 */

namespace App\Core\Entity\Dice\Types;


/**
 * Class D4
 * @package App\Core\Entity\Dice\Types
 */
class D4 extends DiceType
{
    /**
     * @var int
     */
    protected $max = 4;

    /**
     * @return string
     */
    public function __toString()
    {
        return 'd4';
    }
}