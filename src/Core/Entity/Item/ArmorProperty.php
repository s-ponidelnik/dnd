<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 14:47
 */

namespace App\Core\Entity\Item;


class ArmorProperty
{
    /** @var string */
    protected $name;
    /** @var mixed */
    protected $value;

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }
}