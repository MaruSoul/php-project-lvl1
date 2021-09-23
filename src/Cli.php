<?php

namespace Hexlet\Code;

 use function cli\line;
 use function cli\prompt;

class Cli
{
    public static function hello()
    {
        line('Welcome to the Brain Game!');
        $name = prompt('May I have your name?');
        line("Hello, %s!", $name);
    }
    public static function even()
    {
        line('Welcome to the Brain Game!');
        $name = prompt('May I have your name?');
        line("Hello, %s!", $name);
        line('Answer "yes" if the number is even, otherwise answer "no"');
        $numberOfQuestionsAsked = 0;
        $hasWrongAnswer = false;
        while ($numberOfQuestionsAsked < 3 && $hasWrongAnswer == false) {
            $number = rand(1, 100);
            $correctAnswer = ($number % 2 == 0) ? 'yes' : 'no';
            line('Question:' . $number);
            $answer = prompt('Your answer');
            if ($answer == $correctAnswer) {
                line('Correct!');
                $numberOfQuestionsAsked++;
            } else {
                line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
                line("Let's try again, %s!", $name);
                $hasWrongAnswer = true;
            }
            if ($numberOfQuestionsAsked == 3) {
                line('Congratulations, %s!', $name);
            }
        }
    }
    public static function calc()
    {
        line('Welcome to the Brain Game!');
        $name = prompt('May I have your name?');
        line("Hello, %s!", $name);
        line('What is the result of the expression?');
        $numberOfQuestionsAsked = 0;
        $hasWrongAnswer = false;
        while ($numberOfQuestionsAsked < 3 && $hasWrongAnswer == false) {
            $numberOne = rand(1, 100);
            $numberTwo = rand(1, 100);
            $randomSymbolGeneration = rand(1, 3);
            if ($randomSymbolGeneration == 1) {
                $symbol = "+";
                $correctAnswer = $numberOne + $numberTwo;
            } elseif ($randomSymbolGeneration == 2) {
                $symbol = '-';
                $correctAnswer = $numberOne - $numberTwo;
            } else {
                $symbol = '*';
                $correctAnswer = $numberOne * $numberTwo;
            }
            line('Question: ' . "{$numberOne} {$symbol} {$numberTwo}");
            $answer = prompt('Your answer');
            if ($answer == $correctAnswer) {
                line('Correct!');
                $numberOfQuestionsAsked++;
            } else {
                line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
                line("Let's try again, %s!", $name);
                $hasWrongAnswer = true;
            }
            if ($numberOfQuestionsAsked == 3) {
                line('Congratulations, %s!', $name);
            }
        }
    }
    public static function gcd()
    {
        line('Welcome to the Brain Game!');
        $name = prompt('May I have your name?');
        line("Hello, %s!", $name);
        line('What is the result of the expression?');
        $numberOfQuestionsAsked = 0;
        $hasWrongAnswer = false;
        while ($numberOfQuestionsAsked < 3 && $hasWrongAnswer == false) {
            $numberOne = rand(1, 100);
            $numberTwo = rand(1, 100);
            $correctAnswer = gmp_gcd($numberOne, $numberTwo);
            line('Question: ' . $numberOne . ' ' . $numberTwo);
            $answer = prompt('Your answer');
            if (is_numeric($answer) && $answer == $correctAnswer) {
                line('Correct!');
                $numberOfQuestionsAsked++;
            } else {
                line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
                line("Let's try again, %s!", $name);
                $hasWrongAnswer = true;
            }
            if ($numberOfQuestionsAsked == 3) {
                line('Congratulations, %s!', $name);
            }
        }
    }
}
// Welcome to the Brain Games!
// May I have your name? Sam
// Hello, Sam!
// Find the greatest common divisor of given numbers.
// Question: 25 50
// Your answer: 25
// Correct!
// Question: 100 52
// Your answer: 4
// Correct!
// Question: 3 9
// Your answer: 3
// Correct!
// Congratulations, Sam!
