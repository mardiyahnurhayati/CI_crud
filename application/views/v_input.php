<!DOCTYPE html>
<html>
<head>
	<title>Input CodeIgniter</title>
</head>
<body>
<center>
<h2>Tambah Data Baru</h2>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></input></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></input></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><input type="text" name="prodi"></input></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></input></td>
			</tr>
		</table>
</center>
</body>
</html>