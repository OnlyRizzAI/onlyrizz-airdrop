<?php

if ( ! function_exists('localDate')) {
    /**
     * Format a date to the users local timezone with an optional format
     * @param \Carbon\Carbon|string $date
     * @param string $format
     */
    function localDate($date, $format = 'n/j/Y'): string {
        if ( ! $date instanceof Carbon\Carbon) {
            $date = new \Carbon\Carbon($date);
        }

        if (auth()->check()) {
            $date->setTimezone(auth()->user()->timezone);
        }

        return $date->format($format);
    }
}
