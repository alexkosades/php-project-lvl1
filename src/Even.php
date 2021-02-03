<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $number = rand();
        $correctAnswer = $number % 2 == 0 ? 'yes' : 'no';
        $answer = prompt("Question: $number");
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return 0;
        }
    }
    line("Congratulations, %s!", $name);
    return 1;
}
