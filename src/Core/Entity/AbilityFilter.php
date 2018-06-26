<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 17:24
 */

namespace App\Core\Entity;


use App\Entity\CollectionInterface;

class AbilityFilter extends FilterValueCollection
{
    /**
     * @var CollectionInterface
     */
    protected $collection;

    /**
     * @return CollectionInterface
     */
    public function getCollection(): CollectionInterface
    {
        return $this->collection;
    }

    /**
     * @param CollectionInterface $collection
     */
    public function setCollection(CollectionInterface $collection): void
    {
        $this->collection = $collection;
    }
}