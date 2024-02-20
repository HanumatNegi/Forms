<?php
$servername = "localhost";
$username = "root";
$password = ""; //not giving any password
$dbname = "Company";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['id'];
$fname = $_POST['Fname'];
$mname = $_POST['Mname'];
$lname = $_POST['Lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$hobby = $_POST['hobby'];

$sql = "INSERT INTO Students(id,firstname,lastname,middlename,email,Gender,Hobbies) VALUES ('$id','$fname', '$mname', '$lname','$email','$gender','$hobby')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
