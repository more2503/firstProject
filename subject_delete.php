<?php
include 'dbh.php';

$fach = $_POST['subject'];

$sql = "DELETE FROM subject WHERE name = '$fach'";

$result = mysqli_query($conn, $sql);

$sql = "DELETE FROM homework WHERE subject = '$fach'";

$result = mysqli_query($conn, $sql);

header("Location: adminpanel.php");

?>