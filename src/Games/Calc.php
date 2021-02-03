<?php

namespace Brain\Games\Calc;

function run()
{
    \Brain\Games\Engine\run(
        'What is the result of the expression?',
        function () {
            $a = rand(1, 100);
            $b = rand(1, 100);
            switch (rand(1, 3)) {
                case 1:
                    $operator = '+';
                    $answer = $a + $b;
                    break;
                case 2:
                    $operator = '-';
                    $answer = $a - $b;
                    break;
                case 3:
                    $operator = '*';
                    $answer = $a * $b;
                    break;
                default:
                    return null;
            }
            return ["$a $operator $b", (string)$answer];
        }
    );
}
