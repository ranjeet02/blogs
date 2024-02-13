<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$rollNumber = $_POST['rollNumber'];
$password = substr(md5(uniqid(mt_rand(), true)), 0, 8);

$sql = "INSERT INTO students (roll_number, name, email, password) VALUES ('$rollNumber', '$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful. Password: $password";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>