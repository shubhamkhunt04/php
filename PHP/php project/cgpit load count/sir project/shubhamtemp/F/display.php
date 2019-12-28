<style>
td{
    padding:8px;
    text-align:center;
}
</style>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM STU";
$data = mysqli_query($conn,$query);
echo "<br>";
$total= mysqli_num_rows($data);

 if($total!=0)
 {
?>
<table>
<tr>
<th>subjectname</th>
<th>code</th>
<th>lacture</th>
<th>practical</th>
<th colspan="2">operation</th>
</tr>
<?php
    while($result=mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <td>".$result['subjectname']."</td>
        <td>".$result['code']."</td>
        <td>".$result['lecture']."</td>
        <td>".$result['practical']."</td>
        <td><a href='update.php?subject=$result[subjectname]&cod=$result[code]&lec=$result[lecture]&prc=$result[practical]'>Edit</a></td>
        <td><a href='delete.php?co=$result[code]'>Detele</a></td>
        </tr>";
    }
 }
 else
 {
    echo "No record found";
 }
?>
</table>