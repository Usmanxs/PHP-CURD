<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Registration Form </title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    
        <div class="main">
        <div class="registration">
           <h2>Register Here </h2>
           <form  method="post">
             
            <label>First Name : </label>
               <br> 
               <input type="text" name="fname"
               id="name" placeholder="Enter Your First Name" required>
               <br><br>
               <label>Last Name : </label>
               <br> 
               <input type="text" name="lname"
               id="name" placeholder="Enter Your Last Name" required>
               <br><br>
               <label>Your Age : </label>
                <br>
                <input type="number" name="age"
               id="name" placeholder="How Old Are You?" required>
                <br><br>

                <label>Email : </label>
                <br>
                <input type="email" name="email"
               id="name" placeholder="Enter Your Valid Email" required>
                <br><br>
                <label>Password : </label>
                <br>
                <input type="password" name="password"
               id="name" placeholder="Enter Your password" required>
                <br><br>

                <label>Address : </label>
                <br>
                <input type="address" name="address"
                id="name" placeholder="Enter Your Address"required>
                <br><br>
        
                <label>College Name : </label>
                <br>
                <input type="name" name="clgname"
               id="name" placeholder="College Name"required>
                <br><br>

                <label>Mobile No : </label>
                <br>
                <input type="text" name="Country code" value="+91"
                size="1"required>
                <input type="text" name="mob" size="10"required>
                <br><br>

                <label>City : </label>
                <br>
                <select name="city" id="city"required>
                    <option value="Multan">Multan</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="karachi">karachi</option>
                    <option value="Bahawalpur">Bahawalpur</option>
                </select>
                <br><br>

                <label>Country : </label>
                <br>
                <select name="country" id="country"required>
                    <option value="Pakistan">Pakistan</option>
                    <option value="India">India</option>
                    <option value="Afganistan">Afganistan</option>
                    <option value="USA">USA</option>
                    <option value="Dubai">Dubai</option>
                </select>
                <br><br>


                <label>Gender : </label>
                <br>
                &nbsp; &nbsp; &nbsp;
                <input type="radio" name="gender"
               id="male">
                &nbsp;
                <span id="male">Male</span>
                &nbsp; &nbsp; &nbsp;
                <input type="radio" name="gender"
               id="female">
                &nbsp;
                <span id="female">Female</span>
                <br><br>

                  <input type="submit" value="Submit" 
                  name="edit" >
           <button><a href="display.php">Display</a></button>
            </form>


        </div><!--end registration-->
        </div><!--end mian-->   

    </body>
</html>
<?php
        //connection
        $conn=mysqli_connect('localhost','root' ,'','student');
        $Id=$_GET['id'];
        $sql="SELECT *FROM form where id=$Id";
        $result=mysqli_query($conn,$sql);
        if(isset($_POST['edit']))
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $age=$_POST['age'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $address=$_POST['address'];
            $clgname=$_POST['clgname'];
            $mob=$_POST['mob'];
            $city=$_POST['city'];
            $country=$_POST['country'];
            $new="UPDATE form SET fname='$fname',lname='$lname',age='$age',email='$email',password='$password',address='$address',clg='$clgname',mob='$mob',city='$city',country='$country' WHERE id=$Id";
         if($conn->query($new))
         {
             echo"Updated Successfully";
            }
            else
            {
                echo"Error";
            }
        }