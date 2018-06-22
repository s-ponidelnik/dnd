<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 10:16
 */

namespace App\Core\Entity\Dice\Types;


/**
 * Class D6
 * @package App\Core\Entity\Dice\Types
 */
class D6 extends DiceType
{
    /**
     * @var int
     */
    protected $max = 6;
    /**
     * @return string
     */
    public function __toString()
    {
        return 'd6';
    }
}