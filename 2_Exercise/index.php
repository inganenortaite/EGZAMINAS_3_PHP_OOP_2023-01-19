<?php

require_once "vendor/autoload.php";

use Exercise2\CinemaTicket;
use Exercise2\NewCustomerPriceCalculator;
use Exercise2\OrderProcessor;
use Exercise2\StandardPriceCalculator;
use Exercise2\SubscriberPriceCalculator;

$firstTicket = new CinemaTicket("Shotgun Wedding", "Eilė 6, Vieta 3", new \DateTime ("2023-01-23"), 10);
$secondTicket = new CinemaTicket("A Man Called Otto", "Eilė 6, Vieta 4", new \DateTime ("2023-01-23"), 14);
$thirdTicket = new CinemaTicket("Puss in Boots: The Last Wish", "Eilė 6, Vieta 5", new \DateTime ("2023-01-23"), 8);

$standartTicketsCalculator = new StandardPriceCalculator;
$subscriberTicketsCalculator = new SubscriberPriceCalculator;
$newCustomerTicketsCalculator = new NewCustomerPriceCalculator;

$standartTicketsOrderProcessor = new OrderProcessor($standartTicketsCalculator);
$subscriberTicketsOrderProcessor = new OrderProcessor($subscriberTicketsCalculator);
$newCustomerTicketsOrderProcessor = new OrderProcessor($newCustomerTicketsCalculator);

$standartTicketsOrderProcessor->addItem($firstTicket);
$standartTicketsOrderProcessor->addItem($secondTicket);
$standartTicketsOrderProcessor->addItem($thirdTicket);
echo "Standartinio užsakymo kaina yra " . $standartTicketsOrderProcessor->calculatePrice() . " EUR" . PHP_EOL;

$subscriberTicketsOrderProcessor->addItem($firstTicket);
$subscriberTicketsOrderProcessor->addItem($secondTicket);
$subscriberTicketsOrderProcessor->addItem($thirdTicket);
echo "Prenumeratoriaus užsakymo kaina yra " . $subscriberTicketsOrderProcessor->calculatePrice() . " EUR" . PHP_EOL;

$newCustomerTicketsOrderProcessor->addItem($firstTicket);
$newCustomerTicketsOrderProcessor->addItem($secondTicket);
$newCustomerTicketsOrderProcessor->addItem($thirdTicket);
echo "Naujai prisijungusio pirkėjo užsakymo kaina yra " . $newCustomerTicketsOrderProcessor->calculatePrice() . " EUR" . PHP_EOL;