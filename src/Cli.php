<?php

namespace Hexlet\Code;

function run(string $gameName)
{
    require_once(__DIR__ . '/Games/' . $gameName . '.php');
    execute($gameName);
}
