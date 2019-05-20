<?php

$conn = mysqli_connect("localhost" ,"root","", "hausaufgaben");

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

?>