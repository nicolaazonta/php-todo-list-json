<?php
//############# aggiornamento (update): questo file si occupa della modifica di un singolo oggetto nell'array 

$task_state = $_POST('created_task[done]');

if ($task_state) {
    $task_state = false;
} else {
    $task_state = true;
}

?>
