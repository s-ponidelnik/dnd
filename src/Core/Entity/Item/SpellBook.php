<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:04
 */

namespace App\Core\Entity\Item;


use App\Core\Entity\Spell\SpellCollection;

class SpellBook extends Inventory implements SpellBookInterface
{
    const TYPE = 'SPELLBOOK';

    /** @var SpellCollection|null */
    protected $spells;

    public function getSpells(): ?SpellCollection
    {
        return $this->spells;
    }

    public function setSpells(SpellCollection $spellCollection): void
    {
        $this->spells = $spellCollection;
    }
}