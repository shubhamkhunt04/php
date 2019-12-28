<?php
include("connection.php");
error_reporting(0);
$_GET['id'];
$_GET['name'];
$_GET['value'];
$_GET['semester'];
$_GET['branch'];
$_GET['lecture'];
$_GET['tutorial'];
$_GET['practical'];
$_GET['batch'];
?>

<form>
id:<input type="number" name="id" value="<?php echo $_GET['id'];?>" ><br><br> 
name:<input type="text" name="name" value="<?php echo $_GET['name']?>"><br><br>
values:<input type="text" name="value" value="<?php echo $_GET['value']?>"><br><br>
semester:<input type="number" name="semester" value="<?php echo $_GET['semester']?>"><br><br>
branch:<input type="text" name="branch" value="<?php echo $_GET['branch']?>"><br><br>
lecture:<input type="number" name="lecture" value="<?php echo $_GET['lecture']?>"><br><br>
tutorial:<input type="number" name="tutorial" value="<?php echo $_GET['tutorial']?>"><br><br>
practical:<input type="number" name="practical" value="<?php echo $_GET['practical']?>"><br><br>
batch:<input type="number" name="batch" value="<?php echo $_GET['batch']?>"><br><br>
<input type="submit" name="submit">
</form>

<?php
$skid=$_GET['id'];
$skname=$_GET['name'];
$skvalues=$_GET['value'];
$sksem=$_GET['semester'];
$skbranch=$_GET['branch'];
$sklecture=$_GET['lecture'];
$sktutorial=$_GET['tutorial'];
$skpractical=$_GET['practical'];
$skbatch=$_GET['batch'];

if($_GET['submit'])
{
$query= "UPDATE `subjects` SET `NAME`='$skname',`VALUE`='$skvalues',`Semester`='$sksem',`Branch`='$skbranch',`Lecture`='$sklecture',`Tutorial`='$sktutorial',`Practical`='$skpractical',`Batch`='$skbatch' WHERE `ID`='$skid'";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "<br>recode updated";
    header('location:display2.php');
}
else
{
    echo "<br>recode not updated";
}
}
?>