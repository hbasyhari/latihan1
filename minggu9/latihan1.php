<?php
//array multidimensi
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
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan GET</title>
</head>

<body>
     <h1>Daftar Hewan</h1>
<ul>
     <?php foreach ($hewan as $hwn): ?>
          <li>
          <a 
          href="latihan2.php?nama=<?= $hwn["nama"]; ?>&kode= <?= $hwn["kode"]; ?>&
          kelas=<?= $hwn["kelas"]; ?>&ordo=<?= $hwn["ordo"]; ?>&makanan=<?= $hwn["makanan"]; ?>&gambar=<?=
          $hwn["gambar"]; ?>"><?= $hwn["nama"]; ?></a> 

          </li> <?php endforeach; ?></ul>
</body>
</html>