<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 09:45
 */

namespace App\Core\Tables;

use App\Entity\ObjectCollection;

class TableCollection extends ObjectCollection
{
    protected $name;

    public function __construct(array $elements = [])
    {
        parent::__construct(Table::class, $elements);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRandom(int $count = 1): array
    {
        $results = [];
        /** @var Table $table */
        foreach ($this->toArray() as $table) {
            $results[$table->getName()] = $table->getRandom($count);
        }
        return $results;
    }
}