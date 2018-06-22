<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 10:15
 */

namespace App\Core\Entity\Dice\Types;
/**
 * Class DiceType
 * @package App\Core\Entity\Dice\Types
 */
abstract class DiceType implements DiceTypeInterface
{
    /**
     * @var int
     */
    protected $min = 1;
    /**
     * @var
     */
    protected $max;
    /**
     * @param $className
     * @return DiceType
     * @throws \Exception
     */
    public static function getType($className): DiceType
    {
        if (class_exists($className) && method_exists($className, 'type'))
            return $className::type();
        else
            throw new \Exception('Unknow type');
    }
    /**
     * @return DiceType
     */
    public static function type(): DiceType
    {
        $diceType = new static();
        return $diceType;
    }
    /**
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }
    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }
    /**
     * @param int $min
     */
    public function setMin(int $min): void
    {
        $this->min = $min;
    }
    /**
     * @param int $max
     */
    public function setMax(int $max): void
    {
        $this->max = $max;
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return 'd' . $this->max;
    }
}