<?php
include 'dbh.php';

$fach = $_POST['subject'];

$sql = "INSERT INTO subject (name) VALUES ('$fach')";

$result = mysqli_query($conn, $sql);

header("Location: adminpanel.php");

?>