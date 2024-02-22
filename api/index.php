<?php 

$file_path = __DIR__ . '/../database/tasks.json';
// recupero stringa json
$json_file = file_get_contents($file_path);
// converto in array
$tasks = json_decode($json_file, true);

$new_task = $_POST['task'] ?? '';
if($new_task) {
  // converto in array
  // $tasks = json_decode($json_file, true);
  $tasks[] = $new_task;
  $tasks = json_encode($tasks);
  file_put_contents($file_path, $tasks);
  
}

header('Content-Type: application/json');
echo json_encode($tasks);

?>

