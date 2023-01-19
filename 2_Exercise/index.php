<?php

// 2. Dependency invertion principle užduotis
// 2.1. Sukurkite CinemaTicket class [1 balas]
//     - filmo pavadinimas: string
//     - vieta: string
//     - seanso data: Datetime
//     - kaina: float
//     - constructorius turi priimti visus properčius


// 2.2. Sukurkite TotalCalculatorInterface. [0.5 balo]
//     - Kuris turėtų metodą calculatePrice.


// 2.3. Realizuokite 3 skirtingus Kainos skaičiavimus: [1.5 balo]
//     - standartinis -> praeina per visus ticketus ir sudeda ju kainą
//     - su subscriberio nuolaida -> praiena per visus ticketus, sudeda ju suma ir taiko  10% nuolaida
//     - naujo vartotojo nuolaida -> praeina per visus ticket, taiko nuolaida tik pirmam itemui 20%

//     Siūlomi klasių pavadinimai:

//     - StandardPriceCalculator;
//     - SubscriberPriceCalculator;
//     - NewCustomerPriceCalculator;

// 2.4. Sukurkite klasę OrderProcessor: [1 balas]
//     turi savyje properčius:
//         - items: CinemaTicket[]
//         - calculator;
//     turi metodus:
//         - addItem(CinemaTicket $ticket)
//         - getList() // grąžina items masyvą
//         - calculatePrice(): float;
//     Per construktorių yra paduodamas calculatorius!


// 2.5. Sukurkite 3 CinemaTicket su kainomis: [1 balas]
//     1=> 10 EUR; 2=> 14 EUR; 3=> 8 EUR

//     Sukurkite 3 Skaičiavimo strategijų objektus
//     Sukurkite 3 OrderProcessor objektus ir pabandykite sudėti jiems visiems šiuo itemus naudodami addItem bei pritaikyti skirtingas skaičiavimo strategijas.
//     Išveskite kiekvieno OrderioProcessor total kainą.

// Pastebėjimai:
//     - Klasės ir interface turi gyvuoti atskiruose failuose.
//     - Turi būti naudojami namespace ir composer autoloaderis [PAPILDOMAI + 1 balas]