<?php

$toDoList = [
    [
        "text" => "Fare la spesa",
        "did" => true
    ],
    [
        "text" => "Pagare le bollette",
        "did" => false
    ],
    [
        "text" => "Andare in palestra",
        "did" => true
    ],
    [
        "text" => "Chiamare mamma",
        "did" => false
    ],
    [
        "text" => "Prenotare il viaggio",
        "did" => true
    ],
    [
        "text" => "Comprare i biglietti del cinema",
        "did" => false
    ],
    [
        "text" => "Preparare la cena",
        "did" => true
    ],
    [
        "text" => "Lavare i piatti",
        "did" => false
    ],
    [
        "text" => "Portare fuori il cane",
        "did" => true
    ],
    [
        "text" => "Riordinare la stanza",
        "did" => false
    ]
];

$toDoListJson = json_encode($toDoList);

header('Content-Type: application/json');

echo $toDoListJson;

?>
