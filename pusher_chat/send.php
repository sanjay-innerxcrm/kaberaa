<?php
include 'pusher.php'; // Include the Pusher configuration

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
print_r($request);
$name = $request->name;
$message = $request->message;
$data = array('name' => $name, 'message' => $message);
$pusher->trigger('chat', 'message', $data); 
