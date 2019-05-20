<html>
<head>
    <meta charset="UTF-8">
    <title>Search System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<?php
include 'dbh.php';

$datum = $_POST['date'];

$sql = "SELECT * FROM homework WHERE date = '$datum'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='width:100%'>";
    echo "<tr> <th>Fach</th><th>Aufgabe</th><th>Datum</th> </tr> <br>";
    while($row = $result->fetch_assoc()){
        echo "<tr> <td>".$row['subject']."</td><td>".$row['task']."</td><td>".$row['date']."</td> </tr> <br>";
    }
    echo "</table>";
} else {
    echo "<br> 0 results!";
}

?>

</body>
</html>