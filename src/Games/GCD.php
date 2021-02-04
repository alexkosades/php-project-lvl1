<?php

namespace Brain\Games\GCD;

function run(): void
{
    \Brain\Games\Engine\run(
        'Find the greatest common divisor of given numbers.',
        function (): array {
            $a = rand(1, 100);
            $b = rand(1, 100);
            $answer = gcd($a, $b);
            return ["$a $b", (string)$answer];
        }
    );
}

function gcd(int $a, int $b): int
{
    while ($a != 0 && $b != 0) {
        if ($a > $b) {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }
    return $a + $b;
}
