

<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html>
<table align="center" width="40%">
    
    <tr>
    
       <td >
       <Fieldset>
       <legend >Invite Friends</legend>
      
 <input type="texy" placeholder="Enter Email">  <input type="submit" value="Send" id="">
           
           
            
        
       
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
