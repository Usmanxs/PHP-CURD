<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$clgname = $_POST['clgname'];
$mob = $_POST['mob'];
$city = $_POST['city'];
$country = $_POST['country'];
$gender = $_POST['gender'];



    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "student";
// create coonection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if($conn){
    echo "connected";
}
else{
    echo "not connected";
}


    $sql="Insert into form(fname,lname,age,email,password,address,clg,mob,gender,city,country)
    values ('$fname','$lname','$email','$age','$password','$address','$clgname','$mob','$gender','$city','$country')";
    

 if (mysqli_query($conn, $sql)) {
    header("location:display.php");
        echo "successfully";
        echo "<a href='display.php'>Click here for Display</a>          ";
        echo "<a href='student_form.html'>Back</a>";
    
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      

?>