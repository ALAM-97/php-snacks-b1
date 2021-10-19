<?php

    $campionato = [
        [
            "squadraCasa" => "Olimpia Milano",
            "puntiCasa" => 90,
            "squadraOspite" => "Venezia",
            "puntiOspite" => 68
        ],
        [
            "squadraCasa" => "Virtus Bologna",
            "puntiCasa" => 94,
            "squadraOspite" => "Trieste",
            "puntiOspite" => 79
        ],
        [
            "squadraCasa" => "Brescia",
            "puntiCasa" => 98,
            "squadraOspite" => "Basket Napoli",
            "puntiOspite" => 88
        ]
    ];

    for ( $i = 0; $i < count($campionato); $i++ ) {
        echo $campionato[$i]["squadraCasa"] . " - " . $campionato[$i]["squadraOspite"] . " | " . $campionato[$i]["puntiCasa"] . "-" . $campionato[$i]["puntiOspite"] . "<br>";
    }