<?php

header('Content-Type: application/json');

$toDoListJson = file_get_contents('database.json');

echo $toDoListJson;

?>
