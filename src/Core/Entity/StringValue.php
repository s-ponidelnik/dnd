<?php
/**
 * Created by PhpStorm.
 * User: Sergey Ponidelnik
 * Date: 26/06/2018
 * Time: 16:55
 */

namespace App\Core\Entity;

final class StringValue
{
    protected $value;

    public static function create(string $value): self
    {
        return new self($value);
    }

    public function __construct(string $value = null)
    {
        $this->value = $value;
        return $this;
    }

    public function __toString()
    {
        return $this->value;
    }

    public function set(string $value): void
    {
        $this->value = $value;
    }

    public function get(): ?string
    {
        return $this->value;
    }

    public function isEmpty()
    {
        return empty($this->value);
    }

    public function isNull()
    {
        return is_null($this->value);
    }
}