<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li> <img src="img/<?= $_GET["gambar"]; ?> "></li>
        <li> <?= $_GET["nama"];?> </li>
        <li> <?= $_GET["nim"];?> </li>
        <li> <?= $_GET["email"];?> </li>
        <li> <?= $_GET["jurusan"];?> </li>
    </ul>
    <a href="latihan1.php">HOME</a>
</body>
</html>