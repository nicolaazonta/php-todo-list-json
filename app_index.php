<?php
$file_path = './tasks.json';

$tasks_json_string = file_get_contents($file_path);


header('Content-Type: application/json');

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
echo $tasks_json_string;