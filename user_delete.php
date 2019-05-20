<?php
include 'dbh.php';

$username = $_POST['username'];

$sql = "DELETE FROM users WHERE username = '$username'";

$result = mysqli_query($conn, $sql);

header("Location: adminpanel.php");

?>