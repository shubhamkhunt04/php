<?php
include("connection.php");
error_reporting(0);

$query = "SELECT FROM SUBJECTS ";
$data = mysqli_query($conn,$query);
echo "<br>";
$total= mysqli_num_rows($data);
?>