<?php declare(strict_types=1);

namespace App\Sanitizer;

class IntegerSanitizer{
    public static function sanitize(?int $value) : ?int {
        if ($value === null){
            return 0;
        }
        return $value;
    }
}