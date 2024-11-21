<?php

declare(strict_types=1);

namespace Valdemardo\Package;

class StringProcessor
{
    public function getLength(string $string): int
    {
        return mb_strlen($string);
    }
}