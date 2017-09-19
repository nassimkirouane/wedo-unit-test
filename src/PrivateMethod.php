<?php

namespace Wedo;

class PrivateMethod
{
    public function calculateVATAmount($object, $quantity)
    {
        $VAT = 1.2;

        $boxes = (int) floor($quantity / 10);
        $still = $quantity % 10;

        return (int) ceil($VAT * ((8 * $boxes * $object->getPrice()) + $still * $object->getPrice()));
    }

    public function calculateChildCompanyAmount($object, $quantity, $rate)
    {
        if ($rate <= 0.5) {
            throw new \Exception('You can not use a rate dat low !');
        }

        $stacks = (int) floor($quantity / 10);
        $modulo = $quantity % 10;

        $NoVATPrice = (8 * $stacks + $modulo) * $object->getPrice();
        $totalPrice = (int) ceil($rate * $NoVATPrice);
        return (int) $totalPrice;
    }

}
