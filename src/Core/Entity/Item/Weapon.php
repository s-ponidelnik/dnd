<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:37
 */

namespace App\Core\Entity\Item;


use App\Core\Entity\Dice\Dice;

/**
 * Class Weapon
 * @package App\Core\Entity\Item
 */
class Weapon extends Inventory implements LeftHandItemInterface, RightHandInterface
{
    /**
     *
     */
    const TYPE = 'WEAPON';

    /**
     * @var Dice
     */
    protected $damageDice;

    /**
     * @var int
     */
    protected $atackBonus;

    /**
     * @return int
     */
    public function getAtackBonus(): int
    {
        return (int)$this->atackBonus;
    }

    /**
     * @param int $atackBonus
     */
    public function setAtackBonus(int $atackBonus): void
    {
        $this->atackBonus = $atackBonus;
    }

    /**
     * @return Dice
     */
    public function getDamageDice(): Dice
    {
        return $this->damageDice;
    }

    /**
     * @param Dice $dice
     */
    public function setDamageDice(Dice $dice): void
    {
        $this->damageDice = $dice;
    }
}