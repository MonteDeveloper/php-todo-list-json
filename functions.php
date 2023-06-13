<?php

function signTask($toDoList, $taskId){
    $toDoList[$taskId]->did = !$toDoList[$taskId]->did;
    return $toDoList;
}


function deleteTask($toDoList, $taskId){
    unset($toDoList[$taskId]);
    return $toDoList;
}

?>