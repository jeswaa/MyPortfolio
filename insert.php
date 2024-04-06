<?php
include('connection.php');

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO info (fullname, email, message)
VALUES ('$fullname', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  header('Location: index.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
