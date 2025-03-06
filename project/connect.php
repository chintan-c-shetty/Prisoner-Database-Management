<?php

$con = new mysqli('localhost','root','','jail_db');

// Check connection
if (!$con) {
    die(mysqli_error($con));
}


?>
