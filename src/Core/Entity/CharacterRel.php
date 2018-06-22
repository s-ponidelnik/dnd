<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 15:16
 */

namespace App\Core\Entity;
/**
 * Class CharacterRel
 * @package App\Core\Entity
 */
abstract class CharacterRel
{

    /**
     * @var int $id
     */
    protected $id;

    /**
     * @var Character
     */
    protected $character;

    public function getId(): int
    {
        return $this->id;
    }

    public function getCharacter(): Character
    {
        return $this->character;
    }

    public function setCharacter(Character $character): void
    {
        $this->character = $character;
    }
}