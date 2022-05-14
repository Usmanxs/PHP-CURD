<html>
    <head>
        <title>Display</title>
    <link rel="bosstrap" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1>Display</h1>
        <table border =2px>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Password</th>
                <th>Address</th>
                <th>College Name</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Gender</th>
                <th>Country</th>
                <th colspan="2" align="center">  Action  </th>
              
            </tr>
            <?php
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbname = "student";
            // create coonection
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
            $sql="SELECT * FROM form";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result))
            {
                echo 
                "<tr>
                <td>".$row['id']."</td>
                <td>".$row['fname']."</td>
                <td>".$row['lname']."</td>
                <td>".$row['age']."</td>
                <td>".$row['email']."</td>
                <td>".$row['password']."</td>
                <td>".$row['address']."</td>
                <td>".$row['clg']."</td>
                <td>".$row['mob']."</td>
                <td>".$row['city']."</td>
                <td>".$row['gender']."</td>
                <td>".$row['country']."</td>
             <td ><a href='del.php?id=$row[id]'>DELETE</a></td> 
             <td ><a href='edit.php?id=$row[id]'>EDIT</a></td> "  ;
            }
            ?>
            <style>
                table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 15px;
                    text-align: left;
                }
                
            </style>

</html>