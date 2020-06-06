<?php
$mahasiswa = [ ["Muhammad Habib Asyhari","19510028", "Sistem Informasi", "habib.asyhari31@gmail.com"],
			 ["Rasyhari","20510028", "Sistem Informasi", "rasyhari@gmail.com"]
];			 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1.0">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<?php foreach ($mahasiswa as $mhs) : ?>
	<ul>
		<li><?php echo $mhs[0]; ?></li>
		<li><?php echo $mhs[1]; ?></li>
		<li><?php echo $mhs[2]; ?></li>
		<li><?php echo $mhs[3]; ?></li>
	</ul>
<?php endforeach; ?>
</body>
</html>