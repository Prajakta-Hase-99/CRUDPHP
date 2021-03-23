<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="registration";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$Student_Id = $_POST['Student_Id'];
$Student_Name=$_POST['Student_Name'];
$Student_Mobile=$_POST['Student_Mobile'];
$Student_Email=$_POST['Student_Email'];

$sql = "INSERT INTO student(student_id, student_name, student_mobileNo,student_emailid) VALUES ('$Student_Id', '$Student_Name', '$Student_Mobile','$Student_Email')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
?>