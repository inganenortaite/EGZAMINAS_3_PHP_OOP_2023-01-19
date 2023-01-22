<?php

namespace Exercise2;

class NewCustomerPriceCalculator implements TotalCalculatorInterface
{
    public function calculatePrice(array $tickets): float
    {
        $ticketsSum = 0;
        foreach ($tickets as $ticket) {
            if($ticket === $tickets[0]) {
                $ticketsSum += $ticket->price * 0.8;
            } else {
                $ticketsSum += $ticket->price;
            }
        }
        return $ticketsSum;
    }
}