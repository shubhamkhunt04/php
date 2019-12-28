<?php
include("connection.php");
$code= $_GET['co'];

    $query= "DELETE FROM STU WHERE code='$code'";
    $data = mysqli_query($conn,$query);
    if($data)
    {
        echo "<br>recode deleted";
        header('location:display.php');
    }
    else
    {
        echo "<br>recode not deleted";
    }

?>