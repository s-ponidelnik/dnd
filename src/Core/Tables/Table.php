<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 27/06/2018
 * Time: 09:42
 */

namespace App\Core\Tables;


class Table
{
    /** @var string */
    protected $name;
    protected $data = [];

    public function getRandom(int $count = 1): array
    {
        $results = [];
        $i = 0;
        while ($i < $count) {
            $results[] = $this->data[rand(0, count($this->data))];
            $i++;
        }
        return $results;
    }

    public function getAll(): array
    {
        return $this->data;
    }

    public function getName(): string
    {
        return $this->name;
    }
}