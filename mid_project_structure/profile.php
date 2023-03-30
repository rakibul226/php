<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html>
<table align="center" width="40%">
    <tr>
       <td >
            <Fieldset>
            <legend >PROFILE</legend>
                    <table>
                             <center>
                             <img src="xyz.png" alt="profile pic" width="100"><br>
                        
                            <hr>             

                             Name:<?php echo  $_SESSION['username']  ?> <hr>
                             Email  <!--  php --><hr>
                             Address  <!--  php --> <hr>   
                             Phone number <!--  php --> <hr>
                             </center>
                        
                        <tr><td><a href="update_profile.php">Update Profile</a></td></tr>
                    </table>
            </Fieldset>
       </td>
    </tr>
</table>
</html>

<?php
    }else{
        echo "invalid request, please login first...";
    }

?>



