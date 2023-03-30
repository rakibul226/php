<?php 
    session_start();
    
    if(isset($_REQUEST['submit'])){
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        

        if($username == "" && $password == "" ){
            echo "Please Enter you user name and password <br>";
            echo"<a href='login.php'>Log in again</a>";
        }

        else{
            $file = fopen('user.txt', 'r');
            
            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                
                if($username == trim($user[0]) && $password == trim($user[1]))
                {
                    $_SESSION['username']=$user[0];
                    $_SESSION['password']=$user[1];
                    $_SESSION['email']=$user[2];
                    $_SESSION['address']=$address[3];
                    $_SESSION['phone_number']=$phone_number[4];
                    $_SESSION['role']=$user[5];

                    if(trim($_SESSION['role']) == 'admin')
                    {
                        setcookie('flag', 'true', time()+600, '/');
                        header('location: admin_homepage.php');  
                    }
        
                    elseif(trim($_SESSION['role']) == 'customer')
                    {
                        setcookie('flag', 'true', time()+600, '/');
                        header('location: homepage.php');    
                    }
                }
          
            }

            echo "invalid user";
        }


        

    }  
    else{
        echo " Invalid request, please login first...";
        echo "<a href='login.php'>Login </a>";
    }
?>









