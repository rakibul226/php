<html>

<body>
    <form action="contact.php" method="POST">
    
    <fieldset style="height:60px;width:230px;">
    <legend>Username</legend>
    <input type="text" name="user_name" id="" placeholder="Enter your name"> <br>
    </fieldset>
     
     <fieldset style="height:60px;width:230px;">
     <legend>Email</legend>
    <input type="text" name="email" placeholder="Enter your email"> <br>
    </fieldset>

    <fieldset style="height:60px;width:230px;">
    <legend>Password</legend>
    <input type="password" name="password" placeholder="Enter your password"><br>
    </fieldset>

    <fieldset style="height:60px;width:230px;">
    <legend>Date Of Birth</legend>
    <input type="date"name="date_of_birth"value=""><br><br>
    </fieldset>

    <fieldset style="height:60px;width:230px;">
    <legend>Gender</legend>
    <input type="radio"name="gender"value="male">Male
    <input type="radio"name="gender"value="female">Female
    <input type="radio"name="gender"value="other">Other <br><br>
    </fieldset>

    <fieldset style="height:60px;width:230px;">
    <legend>Blood Group</legend>
            <select name="blood_group">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            </select> <br> <br>
    </fieldset>

    <fieldset style="height:60px;width:230px;">
    <legend>Degree</legend>
    <input type="checkbox"name="degree"value="">ssc
    <input type="checkbox"name="degree"value="">Hsc
    <input type="checkbox"name="degree"value="">BSc
    <input type="checkbox"name="degree"value="">MSc <br><br>
    </fieldset>
    <br>
    
            <input type="submit" name="button" value="Submit">
    </form>
</body>



</html>