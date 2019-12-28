<?php
include("connection.php");
$id= $_GET['id'];

    $query= "DELETE FROM SUBJECTS WHERE ID= '$id'";
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