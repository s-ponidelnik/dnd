<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 09:44
 */

namespace App\Core\Entity\Dice;

use App\Core\Entity\Dice\Types\DiceType;

/**
 * Class Dice
 * @package App\Core\Entity\Dice
 */
final class Dice
{
    /**
     * @var DiceType
     */
    protected $type;

    /**
     * Dice constructor.
     * @param DiceType $type
     */
    public function __construct(DiceType $type)
    {
        $this->type = $type;
    }

    /**
     * @param DiceType $type
     * @return Dice
     */
    public static function dice(DiceType $type)
    {
        $dice = new static($type);
        return $dice;
    }

    /**
     * @return int
     */
    public function roll(): int
    {
        return rand($this->type->getMin(), $this->type->getMax());
    }

    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->type->getMax();
    }

    /**
     * @return int
     */
    public function getMin(): int
    {
        return $this->type->getMin();
    }

    public function __toString()
    {
        return $this->type->__toString();
    }

}