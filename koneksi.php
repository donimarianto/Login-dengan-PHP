<?php
session_start(); 

$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
    die("Koneksi gagal");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result_query = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
    $result = $conn->query($result_query);

    if (!$result) {
        die("Query error: " . $conn->error);
    }

    if ($result->num_rows == 1) {
        
        $_SESSION['username'] = $username;
        header("location: index.php");
        exit;
    } else {
        echo "<script>alert('Username dan Password Salah')</script>";
    }
}
?>
