<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

function welcomeToGame(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}

function gameOver(string $name, ?string &$answer, ?string &$correctAnswer, ?string &$victory): void
{
    if ($victory === true) {
        line('Congratulations, %s!', $name);
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
        line("Let's try again, %s!", $name);
    }
}

function execute(string $gameName): void
{
    $func_name = "\\Hexlet\\Code\\Games\\{$gameName}";
    $name = welcomeToGame();

    $answer = '';
    $correctAnswer = '';
    $victory = false;

    $func_name($name, $answer, $correctAnswer, $victory);
    gameOver($name, $answer, $correctAnswer, $victory);
}
