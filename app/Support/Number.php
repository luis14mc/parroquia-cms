<?php

namespace Illuminate\Support;

use Illuminate\Support\Traits\Macroable;
use RuntimeException;

/**
 * Drop-in replacement for Laravel's Number class that provides pure-PHP
 * fallbacks when the "intl" PHP extension is not available.
 *
 * When intl IS loaded, this class delegates to NumberFormatter (original behaviour).
 * When intl is NOT loaded, it uses number_format() / sprintf() so the admin
 * panel can still render tables, widgets, etc.
 */
class Number
{
    use Macroable;

    protected static $locale = 'en';
    protected static $currency = 'USD';

    /* ------------------------------------------------------------------ */
    /*  format()                                                          */
    /* ------------------------------------------------------------------ */

    public static function format(int|float $number, ?int $precision = null, ?int $maxPrecision = null, ?string $locale = null): string|false
    {
        if (extension_loaded('intl')) {
            $formatter = new \NumberFormatter($locale ?? static::$locale, \NumberFormatter::DECIMAL);
            if (! is_null($maxPrecision)) {
                $formatter->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, $maxPrecision);
            } elseif (! is_null($precision)) {
                $formatter->setAttribute(\NumberFormatter::FRACTION_DIGITS, $precision);
            }
            return $formatter->format($number);
        }

        // Pure-PHP fallback
        $decimals = $precision ?? ($maxPrecision ?? 0);
        if (is_null($precision) && is_null($maxPrecision)) {
            // Auto-detect decimals from the number itself
            $decimals = strlen(rtrim(substr(strrchr((string) (float) $number, '.') ?: '', 1), '0'));
        }
        if (! is_null($maxPrecision)) {
            // Limit but don't pad
            $formatted = number_format($number, $maxPrecision, '.', ',');
            $formatted = rtrim(rtrim($formatted, '0'), '.');
            if ($formatted === '' || $formatted === '-') {
                $formatted = '0';
            }
            return $formatted;
        }
        return number_format($number, $decimals, '.', ',');
    }

    /* ------------------------------------------------------------------ */
    /*  parse / parseInt / parseFloat                                     */
    /* ------------------------------------------------------------------ */

    public static function parse(string $string, ?int $type = null, ?string $locale = null): int|float|false
    {
        if (extension_loaded('intl')) {
            $type = $type ?? \NumberFormatter::TYPE_DOUBLE;
            $formatter = new \NumberFormatter($locale ?? static::$locale, \NumberFormatter::DECIMAL);
            return $formatter->parse($string, $type);
        }
        $cleaned = str_replace([',', ' '], ['', ''], $string);
        return is_numeric($cleaned) ? (float) $cleaned : false;
    }

    public static function parseInt(string $string, ?string $locale = null): int|false
    {
        $result = static::parse($string, extension_loaded('intl') ? \NumberFormatter::TYPE_INT32 : null, $locale);
        return $result !== false ? (int) $result : false;
    }

    public static function parseFloat(string $string, ?string $locale = null): float|false
    {
        $result = static::parse($string, extension_loaded('intl') ? \NumberFormatter::TYPE_DOUBLE : null, $locale);
        return $result !== false ? (float) $result : false;
    }

    /* ------------------------------------------------------------------ */
    /*  spell / ordinal / spellOrdinal                                    */
    /* ------------------------------------------------------------------ */

    public static function spell(int|float $number, ?string $locale = null, ?int $after = null, ?int $until = null)
    {
        if (! is_null($after) && $number <= $after) {
            return static::format($number, locale: $locale);
        }
        if (! is_null($until) && $number >= $until) {
            return static::format($number, locale: $locale);
        }
        if (extension_loaded('intl')) {
            $formatter = new \NumberFormatter($locale ?? static::$locale, \NumberFormatter::SPELLOUT);
            return $formatter->format($number);
        }
        return (string) $number;
    }

    public static function ordinal(int|float $number, ?string $locale = null)
    {
        if (extension_loaded('intl')) {
            $formatter = new \NumberFormatter($locale ?? static::$locale, \NumberFormatter::ORDINAL);
            return $formatter->format($number);
        }
        // English-only fallback
        $s = ['th', 'st', 'nd', 'rd'];
        $v = abs((int) $number) % 100;
        return $number . ($s[($v - 20) % 10] ?? $s[$v] ?? $s[0]);
    }

    public static function spellOrdinal(int|float $number, ?string $locale = null)
    {
        if (extension_loaded('intl')) {
            $formatter = new \NumberFormatter($locale ?? static::$locale, \NumberFormatter::SPELLOUT);
            $formatter->setTextAttribute(\NumberFormatter::DEFAULT_RULESET, '%spellout-ordinal');
            return $formatter->format($number);
        }
        return static::ordinal($number, $locale);
    }

    /* ------------------------------------------------------------------ */
    /*  percentage                                                         */
    /* ------------------------------------------------------------------ */

    public static function percentage(int|float $number, int $precision = 0, ?int $maxPrecision = null, ?string $locale = null): string|false
    {
        if (extension_loaded('intl')) {
            $formatter = new \NumberFormatter($locale ?? static::$locale, \NumberFormatter::PERCENT);
            if (! is_null($maxPrecision)) {
                $formatter->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, $maxPrecision);
            } else {
                $formatter->setAttribute(\NumberFormatter::FRACTION_DIGITS, $precision);
            }
            return $formatter->format($number / 100);
        }
        return static::format($number, $precision, $maxPrecision) . '%';
    }

    /* ------------------------------------------------------------------ */
    /*  currency                                                           */
    /* ------------------------------------------------------------------ */

    public static function currency(int|float $number, string $in = '', ?string $locale = null, ?int $precision = null): string|false
    {
        if (extension_loaded('intl')) {
            $formatter = new \NumberFormatter($locale ?? static::$locale, \NumberFormatter::CURRENCY);
            if (! is_null($precision)) {
                $formatter->setAttribute(\NumberFormatter::FRACTION_DIGITS, $precision);
            }
            return $formatter->formatCurrency($number, ! empty($in) ? $in : static::$currency);
        }
        $cur = ! empty($in) ? $in : static::$currency;
        $decimals = $precision ?? 2;
        return $cur . ' ' . number_format($number, $decimals, '.', ',');
    }

    /* ------------------------------------------------------------------ */
    /*  fileSize                                                           */
    /* ------------------------------------------------------------------ */

    public static function fileSize(int|float $bytes, int $precision = 0, ?int $maxPrecision = null): string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
        $unitCount = count($units);
        for ($i = 0; ($bytes / 1024) > 0.9 && ($i < $unitCount - 1); $i++) {
            $bytes /= 1024;
        }
        return sprintf('%s %s', static::format($bytes, $precision, $maxPrecision), $units[$i]);
    }

    /* ------------------------------------------------------------------ */
    /*  abbreviate / forHumans / summarize                                */
    /* ------------------------------------------------------------------ */

    public static function abbreviate(int|float $number, int $precision = 0, ?int $maxPrecision = null): string|false
    {
        return static::forHumans($number, $precision, $maxPrecision, abbreviate: true);
    }

    public static function forHumans(int|float $number, int $precision = 0, ?int $maxPrecision = null, bool $abbreviate = false): string|false
    {
        return static::summarize($number, $precision, $maxPrecision, $abbreviate ? [
            3 => 'K',
            6 => 'M',
            9 => 'B',
            12 => 'T',
            15 => 'Q',
        ] : [
            3 => ' thousand',
            6 => ' million',
            9 => ' billion',
            12 => ' trillion',
            15 => ' quadrillion',
        ]);
    }

    protected static function summarize(int|float $number, int $precision = 0, ?int $maxPrecision = null, array $units = []): string|false
    {
        if (empty($units)) {
            $units = [
                3 => 'K',
                6 => 'M',
                9 => 'B',
                12 => 'T',
                15 => 'Q',
            ];
        }

        switch (true) {
            case (float) $number === 0.0:
                return $precision > 0 ? static::format(0, $precision, $maxPrecision) : '0';
            case $number < 0:
                return sprintf('-%s', static::summarize(abs($number), $precision, $maxPrecision, $units));
            case $number >= 1e15:
                return sprintf('%s' . end($units), static::summarize($number / 1e15, $precision, $maxPrecision, $units));
        }

        $numberExponent = floor(log10($number));
        $displayExponent = $numberExponent - ($numberExponent % 3);
        $number /= pow(10, $displayExponent);

        return trim(sprintf('%s%s', static::format($number, $precision, $maxPrecision), $units[$displayExponent] ?? ''));
    }

    /* ------------------------------------------------------------------ */
    /*  clamp / pairs / trim                                              */
    /* ------------------------------------------------------------------ */

    public static function clamp(int|float $number, int|float $min, int|float $max): int|float
    {
        return min(max($number, $min), $max);
    }

    public static function pairs(int|float $to, int|float $by, int|float $start = 0, int|float $offset = 1): array
    {
        $output = [];
        for ($lower = $start; $lower < $to; $lower += $by) {
            $upper = $lower + $by - $offset;
            if ($upper > $to) {
                $upper = $to;
            }
            $output[] = [$lower, $upper];
        }
        return $output;
    }

    public static function trim(int|float $number): int|float
    {
        return json_decode(json_encode($number));
    }

    /* ------------------------------------------------------------------ */
    /*  locale / currency helpers                                         */
    /* ------------------------------------------------------------------ */

    public static function withLocale(string $locale, callable $callback)
    {
        $previousLocale = static::$locale;
        static::useLocale($locale);
        try {
            return $callback();
        } finally {
            static::useLocale($previousLocale);
        }
    }

    public static function withCurrency(string $currency, callable $callback)
    {
        $previousCurrency = static::$currency;
        static::useCurrency($currency);
        try {
            return $callback();
        } finally {
            static::useCurrency($previousCurrency);
        }
    }

    public static function useLocale(string $locale): void
    {
        static::$locale = $locale;
    }

    public static function useCurrency(string $currency): void
    {
        static::$currency = $currency;
    }

    public static function defaultLocale(): string
    {
        return static::$locale;
    }

    public static function defaultCurrency(): string
    {
        return static::$currency;
    }

    /* ------------------------------------------------------------------ */
    /*  intl check (kept for compatibility but never throws in fallback)  */
    /* ------------------------------------------------------------------ */

    protected static function ensureIntlExtensionIsInstalled(): void
    {
        if (! extension_loaded('intl')) {
            $method = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2)[1]['function'];
            throw new RuntimeException('The "intl" PHP extension is required to use the [' . $method . '] method.');
        }
    }
}
