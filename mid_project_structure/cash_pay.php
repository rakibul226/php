

<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html>
    <body>
    <form action="" method="post">
  <h2>Cash on Delivery</h2>
  Address
  <input type="text"  name="address"><br>
  Phone Number
  <input type="number" name="phone_number"><br>

  <button type="submit">Save</button>
</form>
    </body>
</html>

<?php
    }else{
        echo "invalid request, please login first...";
    }

?>
