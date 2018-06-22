<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 16:09
 */

namespace App\Core\Entity\Core;


class Aligment
{
    protected $lawful;
    protected $chaotic;
    protected $neutral;
    protected $good;
    protected $evil;

    public function isLawful(): bool
    {
        return $this->lawful;
    }

    public function isChaotis(): bool
    {
        return $this->chaotic;
    }

    public function isNeutral(): bool
    {
        return $this->neutral;
    }

    public function isGood(): bool
    {
        return $this->good;
    }

    public function isEvil(): bool
    {
        return $this->evil;
    }

    public function setLawful(bool $lawful): void
    {
        $this->chaotic = !$lawful;
        $this->lawful = $lawful;
    }

    public function setChaotic(bool $chaotic): void
    {
        $this->lawful = !$chaotic;
        $this->chaotic = $chaotic;
    }

    public function setNeutral(bool $neutral): void
    {
        $this->neutral = $neutral;
    }

    public function setGood(bool $good): void
    {
        $this->evil = !$good;
        $this->good = $good;
    }

    public function setEvil(bool $evil): void
    {
        $this->good = !$evil;
        $this->evil = $evil;
    }
}