<!DOCTYPE html>
<html>
<head>
	<title>Daftar Nama Petugas Kebersihan Wilayah Depok</title>
</head>
<body>
	<h2>Daftar Nama Petugas Kebersihan Wilayah Depok</h2>
	<ul>
	<?php if(!empty($daftar)): ?>
		<?php for ($i=0; $i < count($daftar); $i++): ?>
			<li><?php echo $daftar[$i] ?></li>
		<?php endfor; ?>
	<?php endif; ?>
	</ul>
</body>
</html>