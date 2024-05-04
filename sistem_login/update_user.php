<?php
// Connect to database
include "koneksi.php";

// Get the form data
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$bio = $_POST['bio'];
$agree = $_POST['agree'];
$akses = $_POST['akses'];

// Update the user in the database
$sql = "UPDATE `kamaba_next`.`users` SET name = :name, email = :email, birthdate = :birthdate, gender = :gender, bio = :bio, agree = :agree, akses = :akses WHERE id = :id";
echo "$sql";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':birthdate', $birthdate);
$stmt->bindParam(':gender', $gender);
$stmt->bindParam(':bio', $bio);
$stmt->bindParam(':agree', $agree);
$stmt->bindParam(':akses', $akses);
$stmt->execute();

// Redirect to the registration form
header('Location: welcome.php');
exit;
?>