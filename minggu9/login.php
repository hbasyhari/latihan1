<?php
// cek tombol submit
if (isset($_POST["submit"])){
// cek username & password
    if ($_POST["username"] == "admin"  && $_POST["password"]== "123"){
// jika benar, redirect ke halaman admin
        header("Location: admin.php");
     exit;
}
// jika salah, pesan error
        $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Login</title>
</head>
<body>
    <p style ="font-weight:bold; font-size:30px">
    <marquee><h1>Login Administrator</h1></marquee></p>
<?php if(isset($error)): ?>
<p style ="color: red; font-style:italic; font-size:20px">Username atau Password Anda Salah. Silahkan ulangi lagi !</p>
<?php endif; ?>
    <ul>
        <form action="" method="POST">
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li><li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
        </form>
    </ul>
</body>
</html>