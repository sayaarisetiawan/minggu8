<?php 
$mahasiswa =[
    ["nama" =>"Ari Setiawan", 
    "nim" => "22510010", 
    "jurusan" => "Sistem Informasi", 
    "email" => "ari22510010@stimata.ac.id",
    "gambar" => "w.jpg"
    ],
    
    ["nama" =>"Ari", 
    "nim" => "2251_0010", 
    "jurusan" => "Teknik_Informasi", 
    "email" => "ari-22510010@stimata.ac.id",
    "gambar" => "z.jpg"
    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
<h1>Dafar Mahasiswa</h1>
<ul>
    <?php foreach ($mahasiswa as $m) :?>
    <li>
            <a href="latihan2.php?nama= <?= $m["nama"];?>&nim=<?= $m["nim"];?>&jurusan=<?= $m["jurusan"];?>&email=<?= $m["email"];?>&gambar=<?= $m["gambar"];?> "><?=$m["nama"];?>   </a>
    </li>
    <?php endforeach?>
</ul>

</body>
</html>