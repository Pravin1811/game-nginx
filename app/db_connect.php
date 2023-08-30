<?php
$server = 'mysql_db';
$username = 'root';
$password = 'root';
$database = 'game';

if (isset($_POST))

    $conn = new mysqli($server, $username, $password, $database);
if ($conn) {
    // echo 'Server Connected Success';
} else {
    die(mysqli_error($conn));
}
