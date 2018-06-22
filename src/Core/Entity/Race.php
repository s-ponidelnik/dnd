<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 13:17
 */

namespace App\Core\Entity;


use App\Core\Entity\Core\Source;
/**
 * Class Race
 * @package App\Core\Entity
 */
class Race
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
     * @var Race
     */
    protected $parentRace;
    /**
     * @var Source
     */
    protected $source;
}