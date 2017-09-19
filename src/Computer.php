<?php

namespace Wedo;

class Computer
{
    private $model;
    private $price;

    public function __construct($model, $price)
    {
        $this->model = $model;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
