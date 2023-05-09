<?php
$file_path = './tasks.json';

if (isset($_POST['new_task'])) {
  $task = [
    "text" => $_POST['new_task'],
    "done" => false
  ];

  // read the json file with file_get_contents
  $tasks_string = file_get_contents($file_path);
  // convert the json_string into an associative array with json_decode()
  $tasks_array = json_decode($tasks_string, true);
  //add the new task to the array
  array_unshift($tasks_array, $task);

  // convert the array back into a json string
  $new_tasks_json_string = json_encode($tasks_array);
  // replace the file content using file_put_contents()
  file_put_contents($file_path, $new_tasks_json_string);
  // add header application/json
  header('Content-Type: application/json');

  header("Access-Control-Allow-Origin: http://localhost:5173");
  header("Access-Control-Allow-Headers: X-Requested-With");
  // echo json
  echo $new_tasks_json_string;
}
