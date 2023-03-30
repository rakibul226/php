

<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html>
<table  align="center" width="40%">

    <tr>
       <td >
            <Fieldset>
            <legend >UPDATE PROFILE</legend>
                    <table>
                             <center>
                             <img src="xyz.png"  width="100"><br>
                             <pre>
                                 <input type="file" name="filename">
                            <hr>            
Name         <input type="text" name="name" ><br><br>
Email        <input type="text" name="email"><br><br>
Address      <input type="text" name="address"><br><br>    
Phone number <input type="text" name="phn_no"><br><br> 
                    <input type="submit" value="Save change">
                            </pre>
                             </center>
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


