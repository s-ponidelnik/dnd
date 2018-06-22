<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 10:18
 */

namespace App\Core\Entity\Dice\Types;


/**
 * Interface DiceTypeInterface
 * @package App\Core\Entity\Dice\Types
 */
interface DiceTypeInterface
{
    /**
     * @return int
     */
    public function getMin(): int;

    /**
     * @return int
     */
    public function getMax(): int;

    /**
     * @param int $min
     */
    public function setMin(int $min): void;

    /**
     * @param int $max
     */
    public function setMax(int $max): void;

    public function __toString();
}