<style>
td{
    padding:8px;
    text-align:center;
}
</style>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM SUBJECTS WHERE BRANCH = 'CE' AND SEMESTER = 1 AND CLASS = 'CE A'";
$data = mysqli_query($conn,$query);
echo "<br>";
$total= mysqli_num_rows($data);

if($total!=0)
 {
?>
<!-- start CE table-->
<table border=1px cellspacing=0px width=1200px>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>VALUE</th>
        <th>Semester</th>
        <th>Class</th>
        <th>Branch</th>
        <th>Lecture</th>
        <th>Tutorial</th>
        <th>Practical</th>
        <th>Batch</th>
        <th>Load</th>
        <th colspan=2>Operation</th>
    </tr>
<?php
    $idd=1;
    while($result=mysqli_fetch_assoc($data))
    {
        $load1 = $result['Lecture']+$result['Tutorial']+$result['Practical']*$result['Batch'];
        $totalload1 = $load1 + $totalload1;
        echo "<tr>
        <td>".$idd."</td>
        <td>".$result['NAME']."</td>
        <td>".$result['VALUE']."</td>
        <td>".$result['Semester']."</td>
        <td>".$result['class']."</td>
        <td>".$result['Branch']."</td>
        <td>".$result['Lecture']."</td>
        <td>".$result['Tutorial']."</td>
        <td>".$result['Practical']."</td>
        <td>".$result['Batch']."</td>
        <td>".$load1."</td>
        <td><a href='update.php?id=$result[ID]&name=$result[NAME]&value=$result[VALUE]&semester=$result[Semester]&branch=$result[Branch]&lecture=$result[Lecture]&tutorial=$result[Tutorial]&practical=$result[Practical]&batch=$result[Batch]'>Edit</a></td>
        <td><a href='delete.php?id=$result[ID]'>Delete</a></td>
        </tr>";
        $idd++;
    }
 }
 else
 {
    //echo "No record found";
 }
 if($total!=0) //if record found then total load display.
 {
     echo "<th colspan=12>Total Load  = $totalload1</th>";
 }
?>
</table>

<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM SUBJECTS WHERE BRANCH = 'CE' AND SEMESTER = 3";
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
<th>Load</th>
<th colspan=2>Operation</th>
</tr>
<?php
    $idd=1;
    while($result=mysqli_fetch_assoc($data))
    {
        $load2 = $result['Lecture']+$result['Tutorial']+$result['Practical']*$result['Batch'];
        $totalload2 = $load2 + $totalload2;
        echo "<tr>
        <td>".$idd."</td>
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
        $idd++;
    }
 }
 else
 {
    //echo "No record found";
 }
 if($total!=0) //if record found then total load display.
 {
     echo "<th colspan=12>Total Load  = $totalload2</th>";
 }
?>
</table>


<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM SUBJECTS WHERE BRANCH = 'CE' AND SEMESTER = 1 AND CLASS = 'CE A'";
$data = mysqli_query($conn,$query);
echo "<br>";
$total= mysqli_num_rows($data);

if($total!=0)
 {
?>
<!-- start CE table-->
<table border=1px cellspacing=0px width=1200px>
<tr>
<th>ID</th>
<th>NAME</th>
<th>VALUE</th>
<th>Semester</th>
<th>Class</th>
<th>Branch</th>
<th>Lecture</th>
<th>Tutorial</th>
<th>Practical</th>
<th>Batch</th>
<th>Load</th>
<th colspan=2>Operation</th>
</tr>
<?php
    $idd=1;
    while($result=mysqli_fetch_assoc($data))
    {
        $load1 = $result['Lecture']+$result['Tutorial']+$result['Practical']*$result['Batch'];
        $totalload1 = $load1 + $totalload1;
        echo "<tr>
        <td>".$idd."</td>
        <td>".$result['NAME']."</td>
        <td>".$result['VALUE']."</td>
        <td>".$result['Semester']."</td>
        <td>".$result['class']."</td>
        <td>".$result['Branch']."</td>
        <td>".$result['Lecture']."</td>
        <td>".$result['Tutorial']."</td>
        <td>".$result['Practical']."</td>
        <td>".$result['Batch']."</td>
        <td>".$load1."</td>
        <td><a href='update.php?id=$result[ID]&name=$result[NAME]&value=$result[VALUE]&semester=$result[Semester]&branch=$result[Branch]&lecture=$result[Lecture]&tutorial=$result[Tutorial]&practical=$result[Practical]&batch=$result[Batch]'>Edit</a></td>
        <td><a href='delete.php?id=$result[ID]'>Delete</a></td>
        </tr>";
        $idd++;
    }
 }
 else
 {
    //echo "No record found";
 }
 if($total!=0) //if record found then total load display.
 {
     echo "<th colspan=12>Total Load  = $totalload1</th>";
 }
?>
</table>



<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM SUBJECTS WHERE BRANCH = 'CE' AND SEMESTER = 5";
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
<th>Load</th>
<th colspan=2>Operation</th>
</tr>
<?php
    $idd=1;
    while($result=mysqli_fetch_assoc($data))
    {
        $load3 = $result['Lecture']+$result['Tutorial']+$result['Practical']*$result['Batch'];
        $totalload3 = $load3 + $totalload3;
        echo "<tr>
        <td>".$idd."</td>
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
        $idd++;
    }
 }
 else
 {
    //echo "No record found";
 }
 if($total!=0) //if record found then total load display.
 {
     echo "<th colspan=12>Total Load  = $totalload3</th>";
 }
?>

</table>


<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM SUBJECTS WHERE BRANCH = 'CE' AND SEMESTER = 7";
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
<th>Load</th>
<th colspan=2>Operation</th>
</tr>
<?php
    $idd=1;
    while($result=mysqli_fetch_assoc($data))
    {
        $load4 = $result['Lecture']+$result['Tutorial']+$result['Practical']*$result['Batch'];
        $totalload4 = $load4 + $totalload4;
        echo "<tr>
        <td>".$idd."</td>
        <td>".$result['NAME']."</td>
        <td>".$result['VALUE']."</td>
        <td>".$result['Semester']."</td>
        <td>".$result['Branch']."</td>
        <td>".$result['Lecture']."</td>
        <td>".$result['Tutorial']."</td>
        <td>".$result['Practical']."</td>
        <td>".$result['Batch']."</td>
        <td>".$load4."</td>
        <td><a href='update.php?id=$result[ID]&name=$result[NAME]&value=$result[VALUE]&semester=$result[Semester]&branch=$result[Branch]&lecture=$result[Lecture]&tutorial=$result[Tutorial]&practical=$result[Practical]&batch=$result[Batch]'>Edit</a></td>
        <td><a href='delete.php?id=$result[ID]'>Delete</a></td>
        </tr>";
        $idd++;
    }
 }
 else
 {
    //echo "No record found";
 }
 if($total!=0) //if record found then total load display.
 {
     echo "<th colspan=12>Total Load  = $totalload4</th>";
 }
?>

<h1>Final Load = <?php echo $totalload1+$totalload2+$totalload3+$totalload4?><h1>
</table>



<!-- end CE table-->








