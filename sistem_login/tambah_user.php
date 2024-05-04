<?php
include "koneksi.php"
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
<h1>Tambah user</h1>
    Selamat datang,         
         <?php 
        session_start(); 
        echo $_SESSION['name']; 
        ?>!</h1>
    <form action="register.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="birthdate">Birthdate:</label><br>
        <input type="date" id="birthdate" name="birthdate" required><br>
        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>
        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio" required></textarea><br>
        <label for="agree">Agree to Terms and Conditions:</label><br>
        <input type="checkbox" id="agree" name="agree" value="1" required> I agree<br>
        <input type="submit" value="Register">
    </form>
</body>
</html>