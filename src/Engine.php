<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

class Engine
{
    public $name = null;

    public $victory = false;

    public $answer = null;

    public $correctAnswer = null;

    public function welcomeToGame()
    {
        line('Welcome to the Brain Game!');
        $this->name = prompt('May I have your name?');
        line("Hello, %s!", $this->name);
    }


    public function game()
    {
    }

    public function gameOver()
    {
        if ($this->victory) {
            line('Congratulations, %s!', $this->name);
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $this->answer, $this->correctAnswer);
            line("Let's try again, %s!", $this->name);
        }
    }

    public function execute()
    {
        $this->welcomeToGame();
        $this->game();
        $this->gameOver();
    }
}
