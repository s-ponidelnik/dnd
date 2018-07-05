<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 09:26
 */

namespace App\Core\Entity\Core;
/**
 * Class GameRule
 * @package App\Core\Entity
 */
class GameRule
{
    /** @var int */
    protected $id;
    /** @var string */
    protected $name;
    /** @var string */
    protected $version;
    /** @var Description */
    protected $description;
    /** @var string */
    protected $section;
    /** @var GameRuleMechanic */
    protected $mechanic;
    /**
     * @ORM\ManyToOne(targetEntity="App\Core\Entity\Core\Source", inversedBy="gameRules")
     * @ORM\JoinColumn(nullable=true)
     * @var Source
     */
    protected $source;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    public function getDescription(): ?Description
    {
        return $this->description;
    }

    public function setDescription(Description $description): void
    {
        $this->description = $description;
    }
}