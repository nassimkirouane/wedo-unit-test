<?php

namespace Wedo;
class Math
{

    public static function curve($formula, $start, $end)
    {
        $points = [];
        $y = 0;
        for ($x = $start; $x <= $end; $x ++) {
            $equation = '$y = ' . $formula . ';';
            eval($equation);
            $points[$x] = $y;
        }

        return $points;
    }
}