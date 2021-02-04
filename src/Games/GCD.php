<?php

namespace Brain\Games\GCD;

function run()
{
    \Brain\Games\Engine\run(
        'Find the greatest common divisor of given numbers.',
        function () {
            $a = rand(1, 100);
            $b = rand(1, 100);
            $answer = gmp_gcd($a, $b);
            return ["$a $b", (string)$answer];
        }
    );
}
