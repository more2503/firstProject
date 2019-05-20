<?php
include 'dbh.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Adminpanel</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <fieldset>
            <legend>Admin Panel</legend>
            <br>
            <fieldset class="fieldset1">
                <legend>Fächer</legend>
                <fieldset class="fieldset2">
                    <legend>vorhandene Fächer</legend>
                        <div class="div1">
                            <table>
                                <?php

                                    $sql = "SELECT name FROM subject";

                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()){
                                            echo "
                                                <tr>
                                                    <td>".$row['name']."</td>
                                                    <td>
                                                        <form method='post' action='subject_delete.php'>
                                                            <button name='subject' type='submit' value=".$row['name'].">X</button>
                                                        </form>
                                                    </td>
                                                </tr>";
                                        }
                                    } else {
                                        echo "keine Fächer";
                                    }

                                ?>
                            </table>    
                        </div>             
                </fieldset>
                <fieldset class="fieldset2">
                <legend>Fach hinzufügen</legend>
                    <div class="div1">
                        <form action="input_subject.php" method="POST">
                            <input class="first" type="text" name="subject" placeholder="Fach">
                            <input class="first" type="submit" name="Submit">
                        </form>
                    </div> 
                </fieldset>
            </fieldset>

            <fieldset class="fieldset1">
            <legend>Benutzer verwalten</legend>
                <fieldset class="fieldset2">
                <legend>Benutzer entfernen</legend>
                    <table>
                        <tr>
                            <td>username</td>
                            <td>password</td>
                            <td>permission</td>
                            <td></td>
                        </tr>                    
                        <?php
                            $sql = "SELECT * FROM users";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                                    echo "
                                        <tr>
                                            <td>".$row['username']."</td>
                                            <td>".$row['pwd']."</td>
                                            <td>".$row['permission']."</td>
                                            <td>
                                                <form method='post' action='user_delete.php'>
                                                    <button name='username' type='submit' value=".$row['username'].">X</button>
                                                </form>
                                            </td>
                                        </tr>";
                                }
                            }
                        ?>
                    </table>    
                </fieldset>
                <fieldset class="fieldset2">
                <legend>Benutzer hinzufügen</legend>    
                
                </fieldset>
            </fieldset>
        </fieldset>
    </body>
</html>