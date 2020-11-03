<?php

/**
 * A simple string analyser module
 * 
 * It contains functions to get information on strings
 */

declare(strict_types=1);

function countVowels(string $input) : array
{
    $results = [
        "a" => 0,
        "e" => 0,
        "i" => 0,
        "o" => 0,
        "u" => 0,
        "y" => 0
    ];
    $input = strtolower($input);
    $size = strlen($input);
    for ($i = 0; $i < $size; $i++) {
        if (isset($results[$input[$i]])) {
            $results[$input[$i]]++;
        }
    }
    return $results;
}