<?php 
    session_start();
    
    if(isset($_REQUEST['submit'])){
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" && $password == ""){
            echo "Please Enter you user name and password <br>";
            echo"<a href='login.php'>Log in again</a>";
        }

        elseif($username == "admin" && $password =1234){
            $_SESSION['username'] = $username;
            setcookie('flag', 'true', time()+600, '/');
            header('location: admin_homepage.php');       
        }
        elseif($username == "customer" && $password =1234){
                $_SESSION['username'] = $username;
                setcookie('flag', 'true', time()+600, '/');
                header('location: homepage.php');
            }
        else{
                echo "invalid user";
            }
        }
    else{
        echo "<a href='login.php'>Login </a>";
    }
?>









