

<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html>
    <body>
    <form action="" method="post">
  <h2>bKash Payment</h2>
  Mobile Number:<input type="text"  name="mobile_number"><br>
  
  <button type="submit">Save</button>
</form>
    </body>
</html>






<?php
    }else{
        echo "invalid request, please login first...";
    }

?>