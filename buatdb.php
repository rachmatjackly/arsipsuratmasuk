<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE db_arsipsuratmasuk";
if ($conn->query($sql) === TRUE) {
  echo "Database Berhasil Dibuat";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

?>