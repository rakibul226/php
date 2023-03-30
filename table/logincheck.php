<?php 
    session_start();
    
    if(isset($_REQUEST['submit'])){
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" && $password == ""){
            echo "Please Enter you user name and password <br>";
            echo"<a href='login.php'>Log in again</a>";
        }else{
            if($username == $password ){
                $_SESSION['flag'] = "true";
                $_SESSION['username'] = $username;
                header('location: e_dashboard.php');
            }else{
                echo "invalid user";
            }
        }
    
    }else{
        echo "invaid request, please login first!";
        echo "<a href='index.html'>Go back to login page</a>";
       // header('location: index.html');
    }

?>








