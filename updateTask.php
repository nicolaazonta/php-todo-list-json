<?php
//############# aggiornamento (update): questo file si occupa della modifica di un singolo oggetto nell'array 

// read the json file with file_get_contents
//leggo il file json con il comando file_get_contents
$tasks_string = file_get_contents('tasks.json');

// convert the json_string into an associative array with json_decode()
//converto la stringa json in un array associativo con il comando json_decode()
$tasks_array = json_decode($tasks_string, true);

//add the new task to the array
/* array_unshift($tasks_array, $task); */
$index = $_POST['index'];


//inverto il valore del 'done', quindi se è true diventa false e viceversa
$tasks_array[$index]['done'] = !$tasks_array[$index]['done'];

// convert the array back into a json string
//riconverto l'array in una stringa json 
$new_tasks_json_string = json_encode($tasks_array);

// replace the file content using file_put_contents()
//sovrascrivo il contenuto del file con il comando file_put_contents()
file_put_contents('tasks.json', $new_tasks_json_string);

// add header application/json
header('Content-Type: application/json');

// echo json
echo $new_tasks_json_string;
