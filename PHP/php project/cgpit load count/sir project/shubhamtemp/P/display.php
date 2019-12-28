<style>
td{
    padding:8px;
    text-align:center;
}
</style>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM SUBJECTS WHERE BRANCH = 'CE' AND ( SEMESTER = 1 OR SEMESTER = 3 OR SEMESTER = 5 OR SEMESTER = 7 )";
$data = mysqli_query($conn,$query);
echo "<br>";
$total= mysqli_num_rows($data);

if($total!=0)
 {
?>
<!-- start CE table-->
<table border=1px cellspacing=0px width=1100px>
<tr>
<th>ID</th>
<th>NAME</th>
<th>VALUE</th>
<th>Semester</th>
<th>Branch</th>
<th>Lecture</th>
<th>Tutorial</th>
<th>Practical</th>
<th>Batch</th>
<th>Calculation</th>
<th colspan=2>Operation</th>
</tr>
<?php
    while($result=mysqli_fetch_assoc($data))
    {
        $load1 = $result['Lecture']+$result['Tutorial']+$result['Practical']*$result['Batch'];
        $totalload1 = $load1 + $totalload1;
        echo "<tr>
        <td>".$result['ID']."</td>
        <td>".$result['NAME']."</td>
        <td>".$result['VALUE']."</td>
        <td>".$result['Semester']."</td>
        <td>".$result['Branch']."</td>
        <td>".$result['Lecture']."</td>
        <td>".$result['Tutorial']."</td>
        <td>".$result['Practical']."</td>
        <td>".$result['Batch']."</td>
        <td>".$load1."</td>
        <td><a href='update.php?id=$result[ID]&name=$result[NAME]&value=$result[VALUE]&semester=$result[Semester]&branch=$result[Branch]&lecture=$result[Lecture]&tutorial=$result[Tutorial]&practical=$result[Practical]&batch=$result[Batch]'>Edit</a></td>
        <td><a href='delete.php?id=$result[ID]'>Delete</a></td>
        </tr>";
    }
 }
 else
 {
    echo "No record found";
 }
?>
<th colspan=12>Total Load  =  <?php echo $totalload1 ;?> </th>
</table>
<!-- end CE table-->


<?php

$query = "SELECT * FROM SUBJECTS WHERE BRANCH = 'M.TECH_CE' AND ( SEMESTER = 1 OR SEMESTER = 3 OR SEMESTER = 5 OR SEMESTER = 7 )";
$data = mysqli_query($conn,$query);
echo "<br>";
$total= mysqli_num_rows($data);

if($total!=0)
 {
?>
<br><br>
<!--start M.TECH_CE table-->
<table border=1px cellspacing=0px width=1100px>
<tr>
<th>ID</th>
<th>NAME</th>
<th>VALUE</th>
<th>Semester</th>
<th>Branch</th>
<th>Lecture</th>
<th>Tutorial</th>
<th>Practical</th>
<th>Batch</th>
<th>Calculation</th>
<th colspan=2>Operation</th>
</tr>
<?php
    while($result=mysqli_fetch_assoc($data))
    {
        $load2 = $result['Lecture']+$result['Tutorial']+$result['Practical']*$result['Batch'];
        $totalload2 = $load2 + $totalload2;
        echo "<tr>
        <td>".$result['ID']."</td>
        <td>".$result['NAME']."</td>
        <td>".$result['VALUE']."</td>
        <td>".$result['Semester']."</td>
        <td>".$result['Branch']."</td>
        <td>".$result['Lecture']."</td>
        <td>".$result['Tutorial']."</td>
        <td>".$result['Practical']."</td>
        <td>".$result['Batch']."</td>
        <td>".$load2."</td>
        <td><a href='update.php?id=$result[ID]&name=$result[NAME]&value=$result[VALUE]&semester=$result[Semester]&branch=$result[Branch]&lecture=$result[Lecture]&tutorial=$result[Tutorial]&practical=$result[Practical]&batch=$result[Batch]'>Edit</a></td>
        <td><a href='delete.php?id=$result[ID]'>Delete</a></td>
        </tr>";
    }
 }
 else
 {
    echo "No record found";
 }
?>
<th colspan=12>Total Load  =  <?php echo $totalload2 ;?> </th>
</table>
<!--end M.TECH_CE table-->


<?php

$query = "SELECT * FROM SUBJECTS WHERE BRANCH = 'Diploma' AND ( SEMESTER = 1 OR SEMESTER = 3 OR SEMESTER = 5 OR SEMESTER = 7 )";
$data = mysqli_query($conn,$query);
echo "<br>";
$total= mysqli_num_rows($data);

if($total!=0)
 {
?>
<br><br>
<!--start Diploma table-->
<table border=1px cellspacing=0px width=1100px>
<tr>
<th>ID</th>
<th>NAME</th>
<th>VALUE</th>
<th>Semester</th>
<th>Branch</th>
<th>Lecture</th>
<th>Tutorial</th>
<th>Practical</th>
<th>Batch</th>
<th>Calculation</th>
<th colspan=2>Operation</th>
</tr>
<?php
    while($result=mysqli_fetch_assoc($data))
    {
        $load3 = $result['Lecture']+$result['Tutorial']+$result['Practical']*$result['Batch'];
        $totalload3 = $load3 + $totalload3;
        echo "<tr>
        <td>".$result['ID']."</td>
        <td>".$result['NAME']."</td>
        <td>".$result['VALUE']."</td>
        <td>".$result['Semester']."</td>
        <td>".$result['Branch']."</td>
        <td>".$result['Lecture']."</td>
        <td>".$result['Tutorial']."</td>
        <td>".$result['Practical']."</td>
        <td>".$result['Batch']."</td>
        <td>".$load3."</td>
        <td><a href='update.php?id=$result[ID]&name=$result[NAME]&value=$result[VALUE]&semester=$result[Semester]&branch=$result[Branch]&lecture=$result[Lecture]&tutorial=$result[Tutorial]&practical=$result[Practical]&batch=$result[Batch]'>Edit</a></td>
        <td><a href='delete.php?id=$result[ID]'>Delete</a></td>
        </tr>";
    }
 }
 else
 {
    echo "No record found";
 }
?>
<th colspan=12>Total Load  =  <?php echo $totalload3 ;?> </th>
</table>

<!--end Diploma table-->

<?php
  $finalload = $totalload1 + $totalload2 + $totalload3;
  echo "<h1>Final Load = ".$finalload."</h1>"
?>






