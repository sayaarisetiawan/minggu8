<?php 
    //cek tombol submit
if (isset($_POST["submit"])){

    //cek user&passw
if ($_POST["username"] == "admin" && $_POST["password"] == "12345"){  

    //jika benar redirect ke admin page
header("Location : admin.php");
exit;
}
else 
    //jika salah, pesan error
$error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if (isset($error)):?>
        <p>Username or your Password are incorrect</p>
    <?php endif; ?>

    <ul>
        <form action="" method="POST">
            <li>
                <label for="username">USERNAME : </label>
                <input type="text" name="username" id="username">
            </li><br>
            <li>
                <label for="password">PASSWORD : </label>
                <input type="password" name="password" id="password">
            </li><br>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>

        </form>
    </ul>
</body>
</html>