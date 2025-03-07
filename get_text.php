<?php
header("Content-Type: text/plain"); // Plain text for ESP32

$file = "data.txt";
echo file_exists($file) ? file_get_contents($file) : "No text available";
?>
