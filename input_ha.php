<?php
include 'dbh.php';

$fach = $_POST['subject'];
$aufgabe = $_POST['task'];
$datum = $_POST['date'];

$sql = "SELECT * FROM subject WHERE name = '$fach'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $sql = "INSERT INTO homework (subject, task, date) VALUES ('$fach', '$aufgabe', '$datum')";

    $result = mysqli_query($conn, $sql);
    
    header("Location: ha_index.php");

} else {

    header("Location: ha_index.php");

}


?>