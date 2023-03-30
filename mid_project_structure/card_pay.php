

<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html>
    <body>
      <pre>
    Card Payment
     Card Number:<input type="text"  name="card_number"><br>
     Expiry Date:<input type="date"  name="expiry_date"><br>
     CVV:        <input type="text" id="cvv" name="cvv"><br>
 
  <button type="submit">Save</button>
    </body>
      </pre>


</html>



<?php
    }else{
        echo "invalid request, please login first...";
    }

?>