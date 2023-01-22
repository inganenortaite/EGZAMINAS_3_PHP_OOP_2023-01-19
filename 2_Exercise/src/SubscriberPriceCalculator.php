<?php

namespace Exercise2;

class SubscriberPriceCalculator implements TotalCalculatorInterface 
{
    public function calculatePrice(array $tickets): float
    {
        $ticketsSum = 0;
        foreach ($tickets as $ticket) {
            $ticketsSum += $ticket->price;
        }
        return $ticketsSum * 0.9;
    }
}