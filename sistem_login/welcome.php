<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome php</h1>
    Selamat datang,         
       
         <?php 
        session_start(); 
        echo $_SESSION['name']; 
        ?>!</h1>

  <p>Anda sudah berhasil login.</p>
  <a href="tambah_user.php">Tambah User</a>
  <?php
    // Fetch the user data from the database
    $sql = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll();
    ?>
     <table border="1">
        <tr>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Birthdate</th>
        <th>Gender</th>
        <th>Bio</th>
        <th>Agree</th>
        <th>Access</th>
        <th>aksi</th>

    </tr>
        </tr>
        <?php foreach ($users as $user):?>
            <tr>
            <?php
            echo "<td>" . $user["id"] . "</td>";
            echo "<td>" . $user["name"] . "</td>";
            echo "<td>" . $user["email"] . "</td>";
            echo "<td>" . $user["password"] . "</td>";
            echo "<td>" . $user["birthdate"] . "</td>";
            echo "<td>" . $user["gender"] . "</td>";
            echo "<td>" . $user["bio"] . "</td>";
            echo "<td>" . $user["agree"] . "</td>";
            echo "<td>" . $user["akses"] . "</td>";
            echo "<td><form action='delete_user.php' method='post'>
            <input type='number' name='id' required value='". $user['id']. "'hidden><br>
            <button type='submit'>Delete this</button>
            </form></td>";
            echo "<td><form action='edit_user.php' method='post'>
            <input type='number' name='id' required value='". $user['id']. "'hidden><br>
            <button type='submit'>Edit this</button>
            </form></td>";
            ?>
            </tr>
        <?php endforeach;?>
    </table>
    <form action="delete_user_name.php" method="post">
    <label>name:</label><br>
    <input type="text" name="name" required><br>
    <button type="submit">Delete</button>
</form>
  <a href="logout.php">Logout</a>
</body>
</html>