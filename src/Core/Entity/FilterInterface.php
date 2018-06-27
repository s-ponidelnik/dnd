<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 17:36
 */

namespace App\Core\Entity;


use App\Entity\CollectionInterface;

interface FilterInterface
{
    public function getCollection(): CollectionInterface;

    public function setCollection(CollectionInterface $collection): void;
}