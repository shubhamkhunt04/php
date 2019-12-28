<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname="mydb2";

$conn =mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo  "connection is succesfull";
}
else
{
    die("connecion failed because ".mysqli_connect_error());
}
?>