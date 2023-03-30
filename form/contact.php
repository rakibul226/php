<?php
//echo"Usename : ";
//echo $_REQUEST['user_name'];
//<br>
if(isset($_REQUEST['button'])){
    $username = $_REQUEST['user_name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $date = $_REQUEST['date_of_birth'];
    $gender = $_REQUEST['gender'];
    $blood_group = $_REQUEST['blood_group'];
    $degree = $_REQUEST['degree'];
    

}

echo "User name: $username <br> ";
echo "Email: $email <br>";
echo "Password: $password <br>";
echo "Date: $date <br>";
echo "Gender: $gender <br>";
echo "Blood Group: $blood_group <br>";
echo "Degree: $degree";

?>

