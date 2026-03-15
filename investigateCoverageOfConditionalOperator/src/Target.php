<?php

class Target
{
    public static function returnExcludeZero(int $num1, int $num2): int
    {
        if (!empty($num1)) {
            return $num1;
        }

        return !empty($num2) ? $num2 : 9999;
    }
}
