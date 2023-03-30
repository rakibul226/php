<?php

if(isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username= $_REQUEST['user_name'];
    $password = $_REQUEST['password'];

    

    $file = fopen('user.txt', 'w');
    $data = "$name,$email,$password,$username\n";

   // $data = "another test content...\r\n";
    echo "Thank you for signing up!";
    fwrite($file, $data);





    
}
?>



    
   
   
