<?php
// cek data isset
if (!isset ($_POST["submit"])){
    header("Location: latihan3.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Metode POST</title>
</head>
<body>
        <h1>Hewan, <?= $_POST["nama"]; ?></h1>    
</body>

</html>