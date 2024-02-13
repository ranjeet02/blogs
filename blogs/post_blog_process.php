<?php

session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $student_id = $_SESSION['student_id'];

    $sql = "INSERT INTO blogs (title, description, image, student_id) VALUES ('$title', '$description', '$image', '$student_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Blog posted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>