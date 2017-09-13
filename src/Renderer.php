<?php

namespace Wedo;
class Renderer
{

    public function render(array $points)
    {
        $output = '';
        foreach ($points as $x => $y) {
            $output .= str_repeat(' ', round($y, 0)) . "•\n";
        }
        return $output;
    }
}