<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taskno1";

// Create connection
$conn= mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$sql1 = "SELECT right_r,left_l,forward,backward,stop_s FROM directione ";
$query = mysqli_query($conn,$sql1);
while($fetch = mysqli_fetch_assoc($query))
  {
    echo " ".$fetch['right_r'] ."<br>";
    echo " ".$fetch['left_l'] ."<br>";
    echo "".$fetch['forward'] ."<br>";
    echo " ".$fetch['backward'] ."<br>";
    echo "".$fetch['stop_s'] ."<br>";
    echo "<br>";
    }

mysqli_close($conn);
?>