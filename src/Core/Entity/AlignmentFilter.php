<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 17:33
 */

namespace App\Core\Entity;

use App\Entity\CollectionInterface;

/**
 * Class AlignmentFilter
 * @package App\Core\Entity
 */
class AlignmentFilter extends FilterInCollection
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