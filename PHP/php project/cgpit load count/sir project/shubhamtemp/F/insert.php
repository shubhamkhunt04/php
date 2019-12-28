
<?php
include("connection.php");
$query= "INSERT INTO STU VALUES('APE','30073','1','0')";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "<br>recode inserted";
}
else
{
    echo "<br>recode not inserted";
}
?>
