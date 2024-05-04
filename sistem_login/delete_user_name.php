<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
// Connect to the database
include "koneksi.php";

// Get the form data
$name = $_POST['name'];

// Delete the user from the database
$sql = "DELETE FROM users WHERE name = :name";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->execute();
if($stmt){
    echo "<script>alert('berhasil hapus data'); </script>";
    header('Location: welcome.php');
    exit;
} else {
    echo "<script>alert('gagal hapus data'); </script>";
    header('Location: welcome.php');
    exit;
}
// Redirect to the delete user form
?>
</html>