<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 22/06/2018
 * Time: 17:36
 */

namespace App\Core\Entity;


use App\Entity\CollectionInterface;

abstract class Filter implements FilterInterface
{
    protected const IN_COLLECTION = 1;
    protected const VALUE_COLLECTION = 2;
    private const DEFAULT_FILTER_TYPE = self::IN_COLLECTION;
    protected static $FILTER_TYPE;
    /**
     * @var CollectionInterface
     */
    protected $collection;

    /**
     * @return int
     */
    public function getFilterType(): int
    {
        return (static::$FILTER_TYPE ? static::$FILTER_TYPE : self::DEFAULT_FILTER_TYPE);
    }

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