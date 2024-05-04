<?php
// Connect to the database
include "koneksi.php";
// Get the form data
$name = $_POST['name'];
$password = $_POST['password'];

// Fetch the user data from the database
$sql = "SELECT * FROM users WHERE name = :name";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->execute();
$user = $stmt->fetch();

// Verify the password
if ($user && $user['password'] == $password) {
    // Login successful
    session_start();
    $_SESSION['name'] = $name;
    header('Location: welcome.php');
    exit;
} else {
    // Login failed
    header('Location: index.php');

}
?>