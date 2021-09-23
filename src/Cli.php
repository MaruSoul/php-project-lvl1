<?php

namespace Hexlet\Code;

class Cli
{
    public function run(string $classname)
    {
        $game = new $classname();
        $game->execute();
    }
}
