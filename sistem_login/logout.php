<?php
session_start();

// Hapus session
session_destroy();

header("Location: index.php");
?>
