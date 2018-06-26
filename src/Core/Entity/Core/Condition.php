<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 14:42
 */

namespace App\Core\Entity\Core;


class Condition
{
    /** @var int */
    protected $id;
    /** @var string */
    protected $condition;

    public function getId(): int
    {
        return $this->id;
    }

    public function getCondition(): string
    {
        return $this->condition;
    }

    public function setCondition(string $condition): void
    {
        $this->condition = $condition;
    }
}