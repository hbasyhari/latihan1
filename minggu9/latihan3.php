<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Metode Post</title>
</head>

<body>
    <?php
    if (isset ($_POST["submit"])) :?>
    <p style ="color: brown; font-style:italic; font-size:48px">
    Hewan Kesukaanku adalah <?= $_POST["nama"]; ?></p>
    <?php endif; ?>

    <form method="POST">
    <p style ="color: brown; font-weight:; font-size:17px">Masukkan Nama Hewan Kesukaanmu</p>
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">
            Kirim
        </button>
</body>

</html>