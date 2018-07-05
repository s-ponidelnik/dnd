<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 09:23
 */

namespace App\Core\Entity\Core;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Source
 * @package App\Core\Entity
 * @ORM\Entity(repositoryClass="App\Core\Entity\Core\Repository\SourceRepository")
 */
class Source
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
     * @ORM\OneToOne(targetEntity="App\Core\Entity\Core\Description")
     * @ORM\JoinColumn(nullable=true)
     * @var Description|null
     */
    protected $description;
    /**
     * @ORM\Column(type="bool")
     * @var bool
     */
    protected $offical;
    /**
     * @ORM\Column(type="string")
     * @var string|null
     */
    protected $url;

    /**
     * @ORM\OneToMany(targetEntity="App\Core\Entity\Core\GameRule", mappedBy="source")
     * @var GameRule[]
     */
    protected $gameRules;

    protected function __construct()
    {
        $this->gameRules = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return null|Description
     */
    public function getDescription(): ?Description
    {
        return $this->description;
    }

    /**
     * @param Description $description
     */
    public function setDescription(Description $description): void
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function getOffical(): bool
    {
        return (bool)$this->offical;
    }

    /**
     * @param bool $offical
     */
    public function setOffical(bool $offical): void
    {
        $this->offical = $offical;
    }

    /**
     * @return null|string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return ArrayCollection
     */
    public function getGameRules(): ArrayCollection
    {
        return $this->gameRules;
    }

    /**
     * @param ArrayCollection $gameRules
     */
    public function setGameRule(ArrayCollection $gameRules): void
    {
        $this->gameRules = $gameRules;
    }
}