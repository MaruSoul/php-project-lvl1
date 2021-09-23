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
            if(($number % 2) == 0 && $answer == 'yes' ) {
                line('Correct!');
                $numberOfQuestionsAsked++;
            } elseif (($number % 2) != 0 && $answer == 'no') {
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
