<?php
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE username='$uid' AND pwd='$pwd'";


$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    $end = "Username or password incorrect!";
} else {
    if ($row['permission'] == "admin") {
        header("Location: adminpanel.php");
    } else {
        header("Location: ha_index.php");
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="login">
        <?php
            echo $end;
        ?>
    </div>    
</body>
</html>

<!-- TEST -->
