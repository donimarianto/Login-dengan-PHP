<?php
session_start(); 
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Ini adalah halaman index.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
