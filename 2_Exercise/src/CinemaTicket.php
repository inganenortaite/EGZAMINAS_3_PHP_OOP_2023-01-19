<?php

namespace Exercise2;

use DateTime;

class CinemaTicket
{
    public string $movieName;
    public string $seat;
    public DateTime $screeningDate;
    public float $price;
    
    public function __construct(string $movieName, string $seat, DateTime $screeningDate, float $price)
    {
        $this->movieName = $movieName;
        $this->seat = $seat;
        $this->screeningDate = $screeningDate;
        $this->price = $price;
    }
}