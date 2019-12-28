

<?php
include("connection.php");
error_reporting(0);
 $_GET['subject'];
 $_GET['cod'];
 $_GET['lec'];
 $_GET['prc'];
?>

<form>
subject name:<input type="text" name="sb" value="<?php echo  $_GET['subject'];?>"><br><br>
code:<input type="number" name="co"  value="<?php echo $_GET['cod'];?>"><br><br>
lecture:<input type="number" name="lc" value="<?php echo $_GET['lec'];?>"><br><br>
practical:<input type="number" name="pc" value="<?php echo $_GET['prc'];?>"><br><br>
<input type="submit" name="submit" value="update">
</form>

<?php
$sub= $_GET['sb'];
$code= $_GET['co'];
$lec= $_GET['lc'];
$pra= $_GET['pc'];

if($_GET['submit'])
{
$query= "UPDATE stu SET subjectname='$sub',lecture='$lec',practical='$pra' WHERE code='$code'";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "<br>recode updated";
    header('loaction:display.php');
}
else
{
    echo "<br>recode not updated";
}
}
?>