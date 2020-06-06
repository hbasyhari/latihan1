<?php
$angka = [1, 3, 5, 7, 9]
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1.0">
	<title>Latihan Array</title>
	<style>
		.kotak{
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear {
			clear: both
		}
	</style>
</head>
<body>
	<?php for($i=0; $i < 5; $i++){ ?>
		<div class="kotak">
			<?= "$angka[$i]"; ?>
		</div>
	<?php } ?>
	<div class="clear"></div>
	<?php foreach ($angka as $a): ?>
	<div class="kotak">
		<?= $a; ?>
	</div>
	<?php endforeach; ?>
</body>
</html>
