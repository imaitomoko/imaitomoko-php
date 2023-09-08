<?php

function triangleArea($bottom, $height)
{
    return $bottom * $height / 2;
}
function squareArea($bottom, $height)
{
    return $bottom * $height;
}
function trapezoidArea($bottom, $upperside, $height)
{
    return ($bottom + $upperside) * $height / 2;
}

echo triangleArea(5, 5) . "\n";
echo squareArea(7, 8) . "\n";
echo trapezoidArea(4, 5, 4);



