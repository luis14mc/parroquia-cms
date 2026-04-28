<?php

declare(strict_types=1);

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

/**
 * Ensures repeater-defined form field keys are unique server-side (CMS integrity).
 */
final class UniqueFormFieldKeys implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_array($value)) {
            return;
        }

        $keys = [];
        foreach ($value as $row) {
            if (! is_array($row)) {
                continue;
            }
            $key = isset($row['key']) ? (string) $row['key'] : '';
            if ($key !== '') {
                $keys[] = $key;
            }
        }

        if ($keys === []) {
            return;
        }

        if (count($keys) !== count(array_unique($keys))) {
            $fail(__('Los nombres internos de campo (key) no deben repetirse.'));
        }
    }
}
