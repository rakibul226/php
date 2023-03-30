<html>
    <body>
    <form action="">

       <table   align="center" width="40%" >

           <tr>
               <td width="100px"></td>
               <td>
               <fieldset>
                   <legend>Sign Up</legend>
                   <pre>

 Name             <input type="text"name="username" placeholder="Enter Your Name"> <br><br>
 Email            <input type="text"name="email" placeholder="Enter your email "> <br><br>
 Password         <input type="password"name="password" placeholder="Enter a password"> <br><br>
 <!-- Confirm Password <input type="password"name="confirm_password" placeholder="Re-enter a password"> <br><br> -->
                                <button>Login</button>
                   </pre>
                   <center><a href="login.php">Already have an account? Login Now</a></center><br><br>
           
                 </fieldset>
             </tr>     
         </table>
    </form>
    </body>
</html>


<?php


extract($_REQUEST);
$file=fopen("user.txt" , "a");
fwrite($file , "name :");
fwrite($file , $username . "\n");
fwrite($file , "Email :");
fwrite($file , $email . "\n");
fwrite($file , "Password :");
fwrite($file , $password . "\n");
fclose($file);
?>
