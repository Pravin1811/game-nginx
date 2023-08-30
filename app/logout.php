<?php
require 'db_connect.php';
$_SESSION = [];
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit;
?>