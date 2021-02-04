<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Cli\greet;

const MAX_NUMBER_OF_QUESTIONS = 3;

function run(string $questionText, callable $getQuestionData): void
{
    $name = greet();
    line($questionText);
    for ($i = 0; $i < MAX_NUMBER_OF_QUESTIONS; $i++) {
        [$question, $answer] = $getQuestionData();
        line("Question: %s", $question);
        $userAnswer = prompt("Your answer");
        if ($userAnswer === $answer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $answer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
