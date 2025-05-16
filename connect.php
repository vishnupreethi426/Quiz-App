<?php
$conn = new mysqli('wp.kongu.edu', '24csef09', '24csef09', '24csef09');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}
?>
