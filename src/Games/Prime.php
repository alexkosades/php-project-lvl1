<?php

namespace Brain\Games\Prime;

function run()
{
    \Brain\Games\Engine\run(
        'Answer "yes" if the number is prime, otherwise answer "no".',
        function () {
            $question = rand(1, 100);

            $correctAnswer = isPrime($question) ? 'yes' : 'no';
            return [$question, $correctAnswer];
        }
    );
}

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
