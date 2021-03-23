<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="registration";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set  student_name='" . $_POST['student_name'] . "', student_mobileNo='" . $_POST['student_mobile'] . "', student_emailId='" . $_POST['student_email'] . "' WHERE student_id='" . $_POST['student_id'] . "'");
$message = "Record update Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM student WHERE student_id='" . $_GET['student_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<body>
<form name="student" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Student Id: <br>
<input type="text" name="student_id"  value="<?php echo $row['student_id']; ?>" readonly>
<br>
Student Name: <br>
<input type="text" name="student_name" value="<?php echo $row['student_name']; ?>">
<br>
Student Mobile :<br>
<input type="text" name="student_mobile" value="<?php echo $row['student_mobileNo']; ?>">
<br>
Student Email:<br>
<input type="text" name="student_email" value="<?php echo $row['student_emailId']; ?>">
<br>

<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>