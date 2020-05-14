<?php
// array multidimensi
$hewan = [
    ["kode" => "001", 
     "nama" => "Katak", 
     "kelas" => "Amphibia", 
     "ordo" => "Anura",
     "makanan" => "Serangga",
     "gambar" => "katak.jpg"
],

    ["kode" => "002", 
     "nama" => "Hiu",
     "kelas" => "Chondrichthyes",
     "ordo" => "Selachimorpha",
     "makanan" => "Ikan dan Cumi-Cumi",
     "gambar" => "hiu.jpg"
],
    ["kode" => "003", 
    "nama" => "Gajah",
    "kelas" => "Mamalia",
    "ordo" => "Proboscidea",
    "makanan" => "Tumbuhan dan Buah",
    "gambar" => "gajah.jpg"
],
    ["kode" => "004", 
    "nama" => "Perkutut",
    "kelas" => "Aves",
    "ordo" => "Columbiformes",
    "makanan" => "Biji - Bijian",
    "gambar" => "perkutut.jpg"
],
    ["kode" => "005", 
    "nama" => "Kalajengking",
    "kelas" => "Arachnida",
    "ordo" => "Scorpiones",
    "makanan" => "Serangga Kecil",
    "gambar" => "kalajengking.jpg"
]
];
?>
<!DOCTYPE html>
<html_lang="en">

<head>
    <meta charset= "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Data Hewan</title>
</head>

<body>
    <h1>Katalog Data Hewan</h1>
    <?php foreach($hewan as $hwn) : ?>
    <ul>
        <li>
            <img src= "img/<?= $hwn["gambar"] ;?>">
        </li>
        <li>Kode Hewan : <?= $hwn["kode"]; ?></li>
        <li>Nama Hewan : <?= $hwn["nama"]; ?></li>
        <li>Kelas      : <?= $hwn["kelas"]; ?></li>
        <li>Ordo       : <?= $hwn["ordo"]; ?></li>
        <li>Makanan    : <?= $hwn["makanan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>


</html>