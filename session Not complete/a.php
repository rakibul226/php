<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
   session_start();

   if(isset($_SESSION['name'])){

    $name = $_SESSION['name'];
   }

   if(isset($_POST['name'])){
    $name[]=$_POST['name'];
   }

 

?>

<center>
    <form method="POST" action="">
        Name: <input type="text" name="name">
        <input type="submit" value="Submit"><br><br><br>

        <?php
            echo" name : ".$_SESSION['name'];
        ?>

    </form>
</center>


</body>
</html>