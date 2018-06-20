<?php

namespace App\Helper;

abstract class DateTimeConverter
{
    public static function strToDateTime(?string $value, string $format): ?\DateTime
    {
        if (!$value) {
            return null;
        }

        return \DateTime::createFromFormat($format, $value) ?: null;
    }

    public function dateTimeToStr(?\DateTime $value, string $format): ?string
    {
        if (!$value) {
            return null;
        }

        return $value->format($format);
    }
}