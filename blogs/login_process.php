<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollNumber = $_POST['rollNumber'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE roll_number = '$rollNumber' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['student_id'] = $row['id'];
        $_SESSION['student_name'] = $row['name'];
        header("Location: post_blog.php");
        exit();
    } else {
        echo "Invalid Roll Number or Password. Please try again.";
    }
}

$conn->close();
?>