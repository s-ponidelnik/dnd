<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 16:51
 */

namespace App\Core\Entity;


abstract class StringValueRepository
{
    protected $data = [];

    public function set(string $key, S $value): void
    {
        $this->data[$key] = $value;
    }

    public function get(string $key, ?string $defaultValue = null): ?string
    {
        return $this->has($key) ? $this->data[$key] : $defaultValue;
    }

    public function has(string $key): bool
    {
        return isset($this->data[$key]);
    }

}