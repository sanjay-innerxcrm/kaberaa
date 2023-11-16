<?php
require('vendor/autoload.php'); // Include Pusher PHP library

$options = array(
    'cluster' => 'ap2', // Replace with your cluster
    'useTLS' => true
);

$pusher = new Pusher\Pusher(
    'd260c6271947d9942b36',
    '0e70eba0d98061c42f01',
    '1697315',
    $options
);
# app_id = "1697315"
# key = "d260c6271947d9942b36"
# secret = "0e70eba0d98061c42f01"
# cluster = "ap2"