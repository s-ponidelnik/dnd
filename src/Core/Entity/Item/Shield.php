<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:51
 */

namespace App\Core\Entity\Item;


/**
 * Class Shield
 * @package App\Core\Entity\Item
 */
class Shield extends Armor implements LeftHandItemInterface
{
    /**
     *
     */
    const TYPE = 'SHIELD';

    /**
     * @var int
     */
    protected $acBonus;

    public function setAcBonus(int $acBonus): void
    {
        $this->acBonus = $acBonus;
    }

    public function getAcBonus(): int
    {
        return (int)$this->acBonus;
    }
}