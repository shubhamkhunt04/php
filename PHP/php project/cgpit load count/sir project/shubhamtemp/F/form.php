
<?php
include("connection.php");
error_reporting(0);
?>

<form>
subject name:<input type="text" name="sb"><br><br>
code:<input type="number" name="co"><br><br>
lecture:<input type="number" name="lc"><br><br>
practical:<input type="number" name="pc"><br><br>
<input type="submit" name="submit">
</form>


<?php
$sub=$_GET['sb'];
$code=$_GET['co'];
$lecture=$_GET['lc'];
$practical=$_GET['pc'];
if($_GET['submit'])
{
    $query= "INSERT INTO STU VALUES('$sub','$code','$lecture','$practical')";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "<br>recode inserted";
}
else
{
    echo "<br>recode not inserted";
}
}
?>