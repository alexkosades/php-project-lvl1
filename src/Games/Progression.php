<?php

namespace Brain\Games\Progression;

function run()
{
    \Brain\Games\Engine\run(
        'What number is missing in the progression?',
        function () {
            $length = rand(5, 10);
            $step = rand(1, 20);
            $progression = [rand(1, 100)];
            for ($i = 1; $i < $length; $i++) {
                $progression[$i] = $progression[$i - 1] + $step;
            }
            $hiddenNumberIndex = rand(0, $length - 1);
            $answer = $progression[$hiddenNumberIndex];
            $progression[$hiddenNumberIndex] = '..';
            return [implode(' ', $progression), (string)$answer];
        }
    );
}
