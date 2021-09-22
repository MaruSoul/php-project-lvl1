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
}
