
<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html>
    <a href="profile.php">My Profile</a><br>

        
        <input type="text" placeholder="Search...">
        <select name="category">
         <option value="">All Categories</option>
         <option value="">category 1</option>
         <option value="">category 2</option>
         <option value="">category 3</option>
    	</select>
        <button type="submit">Search</button>
        
    <br>
    Setting
    <ul>
        <li><a href="change_password.php">Change Password</a></li>
        <li><a href="invite_friends.php">Invite Friends</a></li>
        
    </ul>
        
        
    <a href="payment_method.php">Payment method</a><br>
    <a href="wishlist.php">Wishlist</a><br>
    <a href="logout.php">Logout</a>
</html>


<?php
    }else{
        echo "invalid request, please login first...";
    }

?>