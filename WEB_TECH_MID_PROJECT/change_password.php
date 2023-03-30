

<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html>
<table align="center" width="40%">
    
    <tr>
    
       <td >
       <Fieldset>
       <legend >Change Password</legend>
       <pre>
            Current Password    : <input type="password"><br>
            New password        : <input type="password"><br>
            Retype New Password : <input type="password" name="" id=""><hr>
            <input type="submit" value="Submit" id="">
            
        </pre>
       
       </td>
        </Fieldset>
    </tr>
</table>

</html>

<?php
    }else{
        echo "invalid request, please login first...";
    }

?>



