<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>


<html>


<form action="logincheck.php" method="POST">

    

    
     <table  align="center" width="40%">
    

     <tr>
        <center><td colspan="3">My Wishlist <hr></td></center>
        
     </tr>
     <tr>
         <td > Item 1</td>
        <td><center><button >Add to Cart</button></center></td>
        <td><center><button >Remove Item</button></center></td>
    </tr>
    
    <tr>
        <td > Item 2</td>
        <td><center><button >Add to Cart</button></center></td>
        <td><center><button >Remove Item</button></center></td>
    </tr>
    <tr>
         <td > Item 3</td>
        <td><center><button >Add to Cart</button></center></td>
        <td><center><button >Remove Item</button></center></td>
    </tr>

    
    </table>


</form>
</html>

<?php
    }
    else{
        echo "invalid request, please login first...";
        echo"<a href='login.php'>Login</a>";
    }

?>




