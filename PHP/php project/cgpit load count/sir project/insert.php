
<?php
include("connection.php");
error_reporting(0);
?>

<form>
id:<input type="number" name="id"><br><br>
name:<input type="text" name="name"><br><br>
values:<input type="text" name="value"><br><br>
semester:<input type="number" name="semester"><br><br>
branch:<input type="textr" name="branch"><br><br>
lecture:<input type="number" name="lecture"><br><br>
tutorial:<input type="number" name="tutorial"><br><br>
practical:<input type="number" name="practical"><br><br>
batch:<input type="number" name="batch"><br><br>
<input type="submit" name="submit">
</form>


<?php
$sid=$_GET['id'];
$sname=$_GET['name'];
$svalues=$_GET['value'];
$ssem=$_GET['semester'];
$sbranch=$_GET['branch'];
$slecture=$_GET['lecture'];
$stutorial=$_GET['tutorial'];
$spractical=$_GET['practical'];
$sbatch=$_GET['batch'];

if($_GET['submit'])
{
    $query= "INSERT INTO `subjects` (`ID`, `NAME`, `VALUE`, `Semester`, `Branch`, `Lecture`, `Tutorial`, `Practical`, `Batch`) VALUES
    ('$sid', '$sname', '$svalues', '$ssem', '$sbranch' ,' $slecture', '$stutorial', '$spractical', '$sbatch')";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "<br>recode inserted";
    header('location:display2.php');
}
else
{
    echo "<br>recode not inserted";
}
}
?>