<?php
include 'dbh.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Hausaufgaben</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="login">
        <form action="input_ha.php" method="POST">

            <input list="subject" name="subject">
            <datalist id="subject">
                <?php
                $sql = "SELECT name FROM subject";

                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()){
                    echo "<option value=".$row['name'].">";
                }
                ?>
            </datalist> <br>
            
            <input class="first" type="text" name="task" placeholder="Aufgabe"> <br>
            <input class="first" type="date" name="date"> <br>
            <input class="first" type="submit" name="Submit"> <br>

        </form>
    </div>

    <br><br><br>

    <div class="login">    
        <form action="search.php" method="POST">
        
            <input class="first" type="date" name="date" placeholder="datum"><br>
            <input class="first" type="submit" name="Submit"><br>

        </form>
    </div>    
</body>
</html>