<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="registration";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn,"SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
<body>
<table>
<tr>
<td>Student Id</td>
<td>Student Name</td>
<td>Student Mobile</td>
<td>Email id</td>
<td>Update</td>
<td>Delete</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) 
{
?>
<tr>
<td><?php echo $row["student_id"]; ?></td>
<td><?php echo $row["student_name"]; ?></td>
<td><?php echo $row["student_mobileNo"]; ?></td>
<td><?php echo $row["student_emailId"]; ?></td>
<td><a href="update-process.php?student_id=<?php echo $row["student_id"]; ?>">Update</a></td>
<td><a href="delete.php?student_id=<?php echo $row["student_id"]; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>
