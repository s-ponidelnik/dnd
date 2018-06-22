<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 15:10
 */

namespace App\Core\Entity;

use App\Core\Entity\Core\Source;

/**
 * Class Feat
 * @package App\Core\Entity
 */
class Feat
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var RaceCollection
     */
    protected $raceFilter;
    /**
     * @var GameClassCollection
     */
    protected $classFilter;
    /**
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

    public function getRaceFileters(): ?RaceCollection
    {
        return $this->raceFilter;
    }

    public function getClassFileters(): ?GameClassCollection
    {
        return $this->classFilter;
    }

}