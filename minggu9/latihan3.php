<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode POST</title>
</head>
<body>
    <?php 
    if (isset($_POST["submit"])) :
    ?>
    <h1>Welcome, <?= $_POST["nama"];?> </h1>
    <?php endif; ?>
    <!-- metode get untuk menampilkan url key value
    metode post untuk menyembunyikan input key value -->
    <form  method="POST">
    Masukkan nama:
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">
    Kirim
    </button>
    </form>
</body>
</html>