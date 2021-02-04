<?php

namespace Brain\Games\Even;

function run(): void
{
    \Brain\Games\Engine\run(
        'Answer "yes" if the number is even, otherwise answer "no".',
        function (): array {
            $question = rand();
            $correctAnswer = $question % 2 == 0 ? 'yes' : 'no';
            return [$question, $correctAnswer];
        }
    );
}
