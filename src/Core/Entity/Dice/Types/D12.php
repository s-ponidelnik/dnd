<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 10:16
 */

namespace App\Core\Entity\Dice\Types;


/**
 * Class D12
 * @package App\Core\Entity\Dice\Types
 */
class D12 extends DiceType
{
    /**
     * @var int
     */
    protected $max = 12;

    /**
     * @return string
     */
    public function __toString()
    {
        return 'd12';
    }
}