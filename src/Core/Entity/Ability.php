<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:16
 */

namespace App\Core\Entity;

use App\Core\Entity\Core\Description;

/**
 * Class Ability
 * @package App\Core\Entity
 */
class Ability
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /** @var string */
    protected $shortName;

    /** @var Description */
    protected $description;

    public function getId(): int
    {
        return $this->id;
    }

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function setShortName(string $shortName): void
    {
        $this->shortName = $shortName;
    }
}