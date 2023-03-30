
<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html>
    <body>
        <h1>Welcome as an Admin</h1>
        <a href="profile.php">Profile</a><br>

        <input type="text" placeholder="Search...">
        <select name="category">
         <option value="">All Categories</option>
         <option value="">Catagori 1</option>
         <option value="">Catagori 2</option>
    	</select>
        <button type="submit">Search</button> <br>

        Setting
            <ul>
                <li><a href="change_password.php">Change password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            

    </body>
</html>

<?php
    }else{
        echo "invalid request, please login first...";
    }

?>

