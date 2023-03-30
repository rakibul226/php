

<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>


<html>
<table border="1" align="center" width="40%">
    
    <tr>
    <td colspan="1">Xcompany
    </td>
    <td>
    logged in as <?php echo $_SESSION['username']  ?> |
    <a href="logout.php">Logout</a>
    </td>
    </tr>

    <tr>
       
            
            <td ><br>
        Account <hr>
        
         <ul>
            <li><a href="e_dashboard.php">Dashboard</a></li>
            <li><a href="f_view_profile.php">View Profile</a></li>
            <li><a href="g_edit_profile.php">Edit Profile</a></li>
            <li><a href="h_profile_picture.php">Change Profile Picture</a></li>
            <li><a href="i_change_password.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
       </td>
       <td >
       <Fieldset>
       <legend >EDIT PROFILE</legend>
            Name <input type="text" name="name" ><hr>
            Email <input type="text" name="email"><hr>
            Gender 
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Other">Other
                <hr>
            Date Of Birth <input type="date" name="date_of_birth"><hr>
            <input type="submit" value="Submit">

       </td>
        </Fieldset>
    </tr>

    <tr>
      <td colspan="5"><center>Copyright @2017</center> </td>
    </tr>

</table>


</html>

<?php
    }
    else{
        echo "invalid request, please login first...";
        echo"<a href='login.php'>Login</a>";
    }

?>

