<?php

namespace App\Entity;

abstract class Enum
{
    /**
     * Store existing constants in a static cache per object.
     *
     * @var array
     */
    protected static $cache = [];

    /**
     * @var array
     */
    protected static $objectCache = [];

    /**
     * @var string
     */
    private $value = '';

    public function __construct(string $value)
    {
        if (!$this->isValid($value)) {
            throw new \UnexpectedValueException("Value '$value' is not part of the enum " . get_called_class());
        }

        $class = get_called_class();
        static::$objectCache[$class][$value] = $this;

        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->getValue();
    }

    final public function equals(Enum $enum): bool
    {
        return $this->getValue() === $enum->getValue() && get_called_class() == get_class($enum);
    }

    public static function values(): array
    {
        $values = [];
        foreach (static::toArray() as $key => $value) {
            $values[$key] = static::getInstance($value);
        }

        return $values;
    }

    /**
     * Returns all possible values as an array
     *
     * @return array Constant name in key, constant value in value
     */
    public static function toArray(): array
    {
        $class = get_called_class();
        if (!array_key_exists($class, static::$cache)) {
            try {
                $reflection = new \ReflectionClass($class);
                static::$cache[$class] = $reflection->getConstants();
            } catch (\Throwable $e) {
                static::$cache[$class] = [];
            }
        }

        return static::$cache[$class];
    }

    public static function isValid(string $value): bool
    {
        return in_array($value, static::toArray(), true);
    }

    public static function getInstance(string $value): Enum
    {
        $class = get_called_class();
        if (isset(static::$objectCache[$class][$value])) {
            return static::$objectCache[$class][$value];
        }

        return new static($value);
    }
}
