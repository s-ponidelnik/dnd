<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:35
 */

namespace App\Core\Entity\Core;


class CharacterGender
{
    protected $male;
    protected $female;

    public function isMale(): bool
    {
        return $this->male;
    }

    public function isFemale(): bool
    {
        return $this->female;
    }

    public function setMale(): void
    {
        $this->male = true;
        $this->female = false;
    }

    public function setFemale(): void
    {
        $this->female = true;
        $this->male = false;
    }
}