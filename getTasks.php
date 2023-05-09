<!-- ############# lettura (read): questo file legge la lista di tasks e la restituisce in formato json -->

<?php

//recupero i file dalla stringa json con il comando file_get_contents()
$tasks_json_string = file_get_contents('tasks.json');


header('Content-Type: application/json');
echo $tasks_json_string;
