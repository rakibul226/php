<?php 
    
    if(isset($_REQUEST['submit'])){
     
        $username = $_REQUEST['username']; 
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password']; 
        $confirm_password= $_REQUEST['confirm_password'];
        $address= $_REQUEST['address'];
        $phone_number= $_REQUEST['phone_number'];
        $role=$_REQUEST['role'];
        

             if($username == "" || $password == "" || $confirm_password == "" || $email == "" || $role =="") {
                 echo "null value";}

             elseif( $password != $confirm_password  )
                {
                 echo "Password not matching";
                }
             elseif( strlen(trim($_REQUEST['password'])) < 5)
                {
                echo "Password must have at least 5 characters";
                }
             else{
                $file = fopen('user.txt', 'a');
                $user = $username."|".$password."|".$email."|".$address."|".$phone_number."|".$role."\r\n";
                fwrite($file, $user);
                    header('location: login.php');
                }   
    }
    else
    {
        echo "invalid user.";
    }
      
    
?>