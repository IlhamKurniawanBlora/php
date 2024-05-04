<?php
// 
// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header('Location: index.php');
    exit();
}

?>