<?php 
//array multidimensi
$mahasiswa =[
["nama" =>"Ari Setiawan", 
"nim" => "22510010", 
"jurusan" => "Sistem Informasi", 
"email" => "ari22510010@stimata.ac.id",
"nilai" => [90, 75, 45],
"gambar" => "w.jpg"
],

["nama" =>"Ari_Setiawan", 
"nim" => "2251_0010", 
"jurusan" => "Sistem_Informasi", 
"email" => "ari-22510010@stimata.ac.id",
"nilai" => [30,70,85],
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
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        
        <img src="img/<?=$mhs["gambar"]?>">
        <li>Nama : <?=$mhs["nama"] ?></li>
        <li>NIM : <?=$mhs["nim"] ?></li>
        <li>Jurusan : <?=$mhs["jurusan"] ?></li>
        <li>Email : <?=$mhs["email"] ?></li>
        <li>Nilai : <?=$mahasiswa[0]["nilai"][1] ?></li>

        <!-- <li><?php echo "Nilai Tugas : " .$mahasiswa [0]["nilai"][2]?></li> -->
    </ul>
    <?php endforeach;?>
</body>
</html>