<?php
$con = mysqli_connect('localhost', 'root', '', 'database_carwash');
if (!$con) {
    die('Connection Error: ' . mysqli_connect_error());
}
?>