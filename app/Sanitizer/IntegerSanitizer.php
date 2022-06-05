<?php declare(strict_types=1);

namespace App\Sanitizer;

class IntegerSanitizer{
    public static function sanitizeInt(?int $value) : ?int {
        if ($value === null){
            return 0;
        }
        return $value;
    }
    public static function sanitizeString(?string $value) : ?string {
        if ($value === null){
            return "";
        }
        return $value;
    }
}