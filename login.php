<?php
    include('koneksi.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h1>Form Login</h1>
        <form action="login.php" method="post">
            <div>
                <label for="username">Username :</label>
                <input type="text" id="username" name="username" require>
            </div>

            <div>
                <label for="password">Password :</label>
                <input type="password" id="password" name="password">
            </div>

            <div>
                <input type="submit" value="login">
            </div>

        </form>
</body>
</html>