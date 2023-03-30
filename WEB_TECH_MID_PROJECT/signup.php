<html>
    <body>
    <form action="signup_check.php">

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
 Confirm Password <input type="password"name="confirm_password" placeholder="Re-enter a password"> <br><br> 
 Address          <input type="text"name="address" placeholder="Enter your Address "> <br><br>
 Phone            <input type="tel"name="phone_number" placeholder="Enter your Phone Number "> <br><br>

                         Signup As <input type="radio" name="role" value="admin"/> Admin
                                   <input type="radio" name="role" value="customer"/> Customer

                  <input type="submit" name="submit">
                   </pre>
                   <center><a href="login.php">Already have an account? Login Now</a></center><br><br>
           
                 </fieldset>
             </tr>     
         </table>
    </form>
    </body>
</html>


