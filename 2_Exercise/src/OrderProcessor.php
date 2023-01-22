<?php

namespace Exercise2;

class OrderProcessor 
{
    public array $cinemaTickets;

    private TotalCalculatorInterface $calculator;

    public function __construct(TotalCalculatorInterface $calculator) 
    {
        $this->calculator = $calculator;
    }
    
    public function addItem(CinemaTicket $ticket): void
    {
        $this->cinemaTickets[] = $ticket;
    }

    public function getList(): array
    {
        return $this->cinemaTickets;
    }

    public function calculatePrice(): float 
    {
        return $this->calculator->calculatePrice($this->cinemaTickets);
    }
}