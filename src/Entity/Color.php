<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 15:56
 */

namespace App\Entity;


class Color
{
    protected $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}