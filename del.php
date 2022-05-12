
<?php
$con = mysqli_connect('localhost','root' ,'','student');
$sql="SELECT * FROM form";
$result=mysqli_query($con,$sql);
$ID=$_GET['id'];
 // sql to delete a record
 $sql = "DELETE FROM form WHERE id=$ID";
    if (mysqli_query($con, $sql)) {
        echo "Record deleted successfully";
       echo '<a href="display.php">Go back</a>';
    } else {
        echo "Error deleting record: " . mysqli_error($con);
       echo '<a href="display.php">try agin</a>';
    }
    ?>