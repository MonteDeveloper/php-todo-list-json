<?php

$toDoList = [
    [
        "testo" => "Fare la spesa",
        "did" => true
    ],
    [
        "testo" => "Pagare le bollette",
        "did" => false
    ],
    [
        "testo" => "Andare in palestra",
        "did" => true
    ],
    [
        "testo" => "Chiamare mamma",
        "did" => false
    ],
    [
        "testo" => "Prenotare il viaggio",
        "did" => true
    ],
    [
        "testo" => "Comprare i biglietti del cinema",
        "did" => false
    ],
    [
        "testo" => "Preparare la cena",
        "did" => true
    ],
    [
        "testo" => "Lavare i piatti",
        "did" => false
    ],
    [
        "testo" => "Portare fuori il cane",
        "did" => true
    ],
    [
        "testo" => "Riordinare la stanza",
        "did" => false
    ]
];

$toDoListJson = json_encode($toDoList);

header('Content-Type: application/json');

echo $toDoListJson;

?>
