<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BraveChefRepository")
 */
class BraveChef
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $test_property;

    public function getId()
    {
        return $this->id;
    }

    public function getTestProperty(): ?string
    {
        return $this->test_property;
    }

    public function setTestProperty(?string $test_property): self
    {
        $this->test_property = $test_property;

        return $this;
    }
}
