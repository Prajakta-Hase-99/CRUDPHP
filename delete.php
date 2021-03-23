<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="registration";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn,"DELETE FROM student WHERE student_id='" . $_GET['student_id'] . "'");
echo"record delete";
?>