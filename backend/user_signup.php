<?php 
session_start();
   include('connection.php');
   $fname = $_POST["firstname"];
   $lname = $_POST["lastname"];
   $email = $_POST["email"];
   $password = $_POST["password"];

 
   $sql = "insert into users( firstname,lastname,email,password ) values('$fname','$lname','$email', '$password');";
     $myquery = mysqli_query($con, $sql);
     if( $myquery ){
        header("Location: ../HTML/login.html");
    }  else{
        header("location: ../HTML/signup.html");
    }          
        
       
 



    ?>



   
