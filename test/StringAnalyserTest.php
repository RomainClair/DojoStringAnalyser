<?php 

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/stringAnalyser.php";

final class StringAnalyserTest extends TestCase
{
    public function testCountVowels(): void
    {
        $results = [
            "a" => 0,
            "e" => 0,
            "i" => 0,
            "o" => 0,
            "u" => 0,
            "y" => 0
        ];
        // Empty string
        $this->assertSame($results, countVowels(""));
        // Some strings with no vowels
        $this->assertSame($results, countVowels("xxx"));
        $this->assertSame($results, countVowels("Rtfm"));
        $this->assertSame($results, countVowels("cvcvcvcvdfdfdfdfrtpppm"));
        $this->assertSame($results, countVowels("CdFgTp"));
        // With lowercase vowels
        $this->assertSame( [
            "a" => 3,
            "e" => 0,
            "i" => 0,
            "o" => 0,
            "u" => 0,
            "y" => 0
        ], countVowels("aaa"));
        $this->assertSame( [
            "a" => 0,
            "e" => 0,
            "i" => 0,
            "o" => 2,
            "u" => 2,
            "y" => 0
        ], countVowels("Coucou"));
        // With mixed vowels
        $this->assertSame( [
            "a" => 4,
            "e" => 0,
            "i" => 0,
            "o" => 0,
            "u" => 0,
            "y" => 0
        ], countVowels("Alakazam"));
        $this->assertSame( [
            "a" => 2,
            "e" => 2,
            "i" => 0,
            "o" => 1,
            "u" => 3,
            "y" => 0
        ], countVowels("Salut A Tous XXX EuE"));
        $this->assertSame( [
            "a" => 2,
            "e" => 2,
            "i" => 2,
            "o" => 2,
            "u" => 2,
            "y" => 2
        ], countVowels("AaEeIiOoUuYy"));
    }
}