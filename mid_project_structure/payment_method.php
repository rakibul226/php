


<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>


<html>

    <body>
        <a href="bkash_pay.php">Bkash</a><br>
        <a href="card_pay.php">Card Payment</a><br>
        <a href="cash_pay.php">Cash on Delivery</a>
    </body>

</html>



<?php
    }
    else{
        echo "invalid request, please login first...";
        echo"<a href='login.php'>Login</a>";
    }

?>


