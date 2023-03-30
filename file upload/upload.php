<?php

 //echo $_FILES['filename']['name']; //Print the uploaded file name
 //echo"<br>";
 //echo $_FILES['filename']['tmp_name']; //print the temporary location for uploaded file
 //echo"<br>";

 $src =$_FILES['filename']['tmp_name']; //set file source
 $dest ='images/'.$_FILES['filename']['name']; //set file destination folder

if(move_uploaded_file($src,$dest)){ //moving file form source to destination
    echo"File uploaded successfully.";
    }
else{
    echo"Select a file first";
  //  header('location: index.php');
    }

?>