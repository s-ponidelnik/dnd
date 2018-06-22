<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 09:38
 */

namespace App\Core\Entity;

use App\Core\Entity\Dice\Dice;
/**
 * Class CharacterClass
 * @package App\Core\Entity
 */
class CharacterClass
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
     * @return Dice
     */
    public function getHitDice(): Dice
    {
        return $this->hitDice;
    }
    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    /**
     * @param Dice $dice
     */
    public function setHitDice(Dice $dice): void
    {
        $this->hitDice = $dice;
    }
    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}