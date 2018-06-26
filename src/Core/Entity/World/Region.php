<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 15:38
 */

namespace App\Core\Entity\World;


class Region extends LocationArea
{
    /** @var string */
    protected $name;
    /** @var string */
    protected $description;
    /** @var LocationArea */
    protected $locationArea;
}