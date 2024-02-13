<?php
session_start();
include 'db.php';

$student_id = $_SESSION['student_id'];

$sql = "SELECT * FROM blogs WHERE student_id = '$student_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Title: " . $row['title'] . "<br>";
        echo "Description: " . $row['description'] . "<br>";
        echo "Image: <img src='" . $row['image'] . "' alt='Blog Image'><br>";
        echo "<hr>";
    }
} else {
    echo "No blogs found.";
}

$conn->close();
?>