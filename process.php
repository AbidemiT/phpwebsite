<?php

require('config/config.php'); 
require('config/db.php');

// Check For Submit
//  if(isset($_POST['submit'])){}

   if($conn -> connect_error){
       die($conn -> connect_error);
   }
    // Get Form Data
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $message = mysqli_real_escape_string($conn, $_POST['message']);

   $sql = "INSERT INTO messages(name, email, message) VALUES('$name', '$email', '$message')";

   if($conn -> query($sql) === TRUE) {
       echo "Inserted";
   } else {
       echo "Failed";
   }

   $conn -> close(); 
?>