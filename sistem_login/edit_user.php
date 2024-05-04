<?php
include "koneksi.php";
// Get the form data
$id = $_POST['id'];

// Delete the user from the database
$sql = "SELECT * FROM users WHERE id ='$id'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <script>
            function fillPassword(password) {
                document.getElementById("password").value = password;
            }
        </script>
    </head>
    <body>
    <h1>Edit Data User</h1>
    Selamat datang,         
         <?php 
        session_start(); 
        echo $_SESSION['name']; 
        ?>!</h1>
        <?php foreach ($users as $user):?>
        <form action="update_user.php" method="post">
            <label>Username:</label><br>
            <input type="text" name="name" required value="<?php echo $user['name'];?>"><br>
            <label>Password:</label><br>
            <input type="password" id="password" name="password" required><br>
            <button type="button" onclick="fillPassword('<?php echo $user['password'];?>')">Fill Password</button><br>
            <label>Email:</label><br>
            <input type="email" name="email" required value="<?php echo $user['email'];?>"><br>
            <label>Birthdate:</label><br>
            <input type="date" name="birthdate" required value="<?php echo $user['birthdate'];?>"><br>
            <label>Gender:</label><br>
            <select name="gender" required>
                <option value="male" <?php if ($user['gender'] == 'male') echo 'selected';?>>Male</option>
                <option value="female" <?php if ($user['gender'] == 'female') echo 'selected';?>>Female</option>
                <option value="other" <?php if ($user['gender'] == 'other') echo 'selected';?>>Other</option>
            </select><br>
            <label>Bio:</label><br>
            <textarea name="bio" required><?php echo $user['bio'];?></textarea><br>
            <label>Akses :</label><br>
            <select name="akses" required>
                <option value="admin" <?php if ($user['akses'] == 'admin') echo 'selected';?>>admin</option>
                <option value="guest" <?php if ($user['akses'] == 'guest') echo 'selected';?>>guest</option>
            </select><br>
            <label>Agree:</label><br>
            <input type="checkbox" value="1" name="agree" required <?php if ($user['agree'] == '1') echo 'checked';?>>
            <input hidden type="text" name="id" required value="<?php echo $user['id'];?>"><br>
            <button type="submit">Update</button>
        </form>
        <?php endforeach;?>
    </body>
</html>