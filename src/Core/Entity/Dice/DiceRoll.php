<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 10:22
 */

namespace App\Core\Entity\Dice;


use App\Core\Entity\Dice\Types\DiceType;

/**
 * Class DiceRoll
 * @package App\Core\Entity\Dice
 */
final class DiceRoll
{
    /**
     * @var Dice
     */
    protected $dice;

    /**
     * @var int
     */
    protected $count;

    /**
     * DiceRoll constructor.
     * @param int $count
     * @param DiceType $diceType
     */
    public function __construct(int $count, DiceType $diceType)
    {
        $this->setCount($count);
        $this->setDiceType($diceType);
    }

    /**
     * @param DiceType $diceType
     */
    public function setDiceType(DiceType $diceType): void
    {
        $this->dice = new Dice($diceType);
    }

    /**
     * @param string $rollDice
     * @return int
     * @throws \Exception
     */
    public static function rollDice(string $rollDice): int
    {
        $rollData = explode('d', $rollDice);
        return static::diceRoll($rollData[0], DiceType::getType($rollData[1]));
    }

    /**
     * @param int $count
     * @param DiceType $diceType
     * @return int
     */
    public static function diceRoll(int $count, DiceType $diceType): int
    {
        $diceRoll = new static($count, $diceType);
        return $diceRoll->roll();
    }

    /**
     * @return int
     */
    public function roll(): int
    {
        $result = 0;
        $count = $this->dice->getMin();
        while ($count < $this->dice->getMax()) {
            $result = $result + $this->dice->roll();
            $count++;
        }
        return $result;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    /**
     * @return Dice
     */
    public function getDice(): Dice
    {
        return $this->dice;
    }

    /**
     * @param Dice $dice
     */
    public function setDice(Dice $dice): void
    {
        $this->dice = $dice;
    }
}