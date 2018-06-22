<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 09:23
 */

namespace App\Core\Entity\Core;
/**
 * Class Source
 * @package App\Core\Entity
 */
class Source
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var bool
     */
    protected $offical;
    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var GameRule
     */
    protected $gameRule;

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
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
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
     * @return GameRule
     */
    public function getGameRule(): GameRule
    {
        return $this->gameRule;
    }

    /**
     * @param GameRule $gameRule
     */
    public function setGameRule(GameRule $gameRule): void
    {
        $this->gameRule = $gameRule;
    }
}