<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:50
 */

namespace App\Core\Entity\Item;


class BodyArmor extends Armor implements BodyArmorInterface
{
    const TYPE = 'BODY_ARMOR';

    /**
     * @var bool
     */
    protected $disadvantage;

    public function getDisadvantage(): bool
    {
        return (bool)$this->disadvantage;
    }

    public function setDisadvantage(bool $disadvantage): void
    {
        $this->disadvantage = $disadvantage;
    }
}