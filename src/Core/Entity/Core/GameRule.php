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
 * @ORM\Entity(repositoryClass="App\Core\Entity\Core\Repository\GameRuleRepository")
 */
class GameRule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $id;
    /**
     * @ORM\Column(type="string",length=255)
     * @var string|null
     */
    protected $name;
    /**
     * @ORM\Column(type="string",length=55)
     * @var string|null
     */
    protected $version;
    /**
     * @ORM\OneToOne(targetEntity="App\Core\Entity\Core\Description")
     * @ORM\JoinColumn(nullable=true)
     * @var Description
     */
    protected $description;

    /**
     * @ORM\Column(type="string",length=255)
     * @var string|null
     */
    protected $section;

    /**
     * @ORM\OneToOne(targetEntity="App\Core\Entity\Core\GameRuleMechanic")
     * @ORM\JoinColumn(nullable=true)
     * @var GameRuleMechanic
     */
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