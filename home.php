<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'xchat') or die  ('unable to connect');




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <center>

login 
<form action="welcome.php" method="POST">

<input type="text" name="name" placeholder="name"> <br><br>

<input type="password" name="pass" placeholder="Password"> <br><br>

<input type="submit" name="login" value="Login"> <br><br>



</form>
    </center>


    <?php
    
    
    
    if(isset($_POST['login'])){

                   

        $name= $_POST['name'];

        $pass= $_POST['pass'];
      

        $select = mysqli_query($conn, "SELECT* FROM all WHERE name= '$name' AND pass='$pass' "); 
    
        $row = mysqli_fetch_array($select);

        if(is_array($row)){

            $_SESSION["name"] = $row ['name'];

            $_SESSION["pass"] = $row ['pass'];

        }else{
            echo'<script type = "text/javascript">';
            echo'alert("Invalid name or Password");';
            echo'window.location.href = "index.php"';
            echo'</script>';
        }
   
    if(isset($_SESSION["name"])){

        header("Location:login.php");
    }
}
    ?>
</body>
</html>