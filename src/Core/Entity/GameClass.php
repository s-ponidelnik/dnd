<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:20
 */

namespace App\Core\Entity;


use App\Core\Entity\Core\Source;
use App\Core\Entity\Dice\Dice;

/**
 * Class GameClass
 * @package App\Core\Entity
 */
class GameClass
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var Dice
     */
    protected $hitDice;
    /**
     * @var Source
     */
    protected $source;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Dice
     */
    public function getHitDice(): Dice
    {
        return $this->hitDice;
    }

    /**
     * @param Dice $dice
     */
    public function setHitDice(Dice $dice): void
    {
        $this->hitDice = $dice;
    }
}