<?php

if (! function_exists('circleProgressOffset')) {
    function circleProgressOffset(int|float $percent, int $radius = 40): float
    {
        $percent = max(0, min(100, $percent));
        $circumference = 2 * pi() * $radius;

        return $circumference * (1 - $percent / 100);
    }
}
