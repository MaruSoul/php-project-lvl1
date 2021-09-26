<?php

namespace Hexlet\Code;

function run(string $gameName) : void
{
    require_once(__DIR__ . '/Games/' . $gameName . '.php');
    execute($gameName);
}
