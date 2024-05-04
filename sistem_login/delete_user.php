<?php
// Connect to the database
include "koneksi.php";

// Get the form data
$id = $_POST['id'];

// Delete the user from the database
$sql = "DELETE FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Redirect to the delete user form
header('Location: welcome.php');
exit;
?>