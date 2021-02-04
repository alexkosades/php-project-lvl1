<?php

namespace Brain\Games\GCD;

function run()
{
    \Brain\Games\Engine\run(
        'Find the greatest common divisor of given numbers.',
        function () {
            $a = rand(1, 100);
            $b = rand(1, 100);
            $answer = gcd($a, $b);
            return ["$a $b", (string)$answer];
        }
    );
}

function gcd($a, $b)
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
