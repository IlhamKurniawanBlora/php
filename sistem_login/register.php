<?php
// Connect to the database
include "koneksi.php";
session_start();

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$bio = $_POST['bio'];
$agree = $_POST['agree'];
$akses = 'guest'; // Set the access level to 'user'

// $password = password_hash($password, PASSWORD_DEFAULT);
    // Display admin content
    $sql = "INSERT INTO kamaba_next.users (name, email, password, birthdate, gender, bio, agree, akses)
    VALUES
    (:name, :email, :password, :birthdate, :gender, :bio, :agree, :akses);";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':birthdate', $birthdate);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':bio', $bio);
    $stmt->bindParam(':agree', $agree);
    $stmt->bindParam(':akses', $akses);
    $stmt->execute();
    header('Location: welcome.php');
    exit;
// Insert the user into the database

// Redirect to the registration form

?>