<?php
// cek apakah $_GET terdapat data?
if( !isset($_GET["nama"]) ){
// redirect
        header("Location: latihan1.php");
        exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Hewan</title>

</head>
<body>
        <h1>Detail Hewan</h1>
        <ul>
                <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
                <li><?= $_GET["nama"]; ?></li>
                <li><?= $_GET["kode"]; ?></li>
                <li><?= $_GET["kelas"]; ?></li> 
                <li><?= $_GET["ordo"]; ?></li>
                <li><?= $_GET["makanan"]; ?></li>          
        </ul>

     <a href="latihan1.php"> Kembali ke halaman sebelumnya</a>
</body>

</html>