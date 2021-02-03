<?php

namespace Brain\Games\Even;

function run()
{
    \Brain\Games\Engine\run(
        'Answer "yes" if the number is even, otherwise answer "no".',
        function () {
            $question = rand();
            $correctAnswer = $question % 2 == 0 ? 'yes' : 'no';
            return [$question, $correctAnswer];
        }
    );
}
