<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 14:25
 */

namespace App\Core\Entity\Item;


use App\Core\Entity\Core\Description;

class ArmorType
{
    /** @var int */
    protected $id;
    /** @var string */
    protected $name;
    /** @var Description */
    protected $description;

    /** @var ArmorPropertyCollection */
    protected $properties;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): ?Description
    {
        return $this->description;
    }

    public function getProperties(): ?ArmorPropertyCollection
    {
        return $this->properties;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setDescription(Description $description): void
    {
        $this->description = $description;
    }
}