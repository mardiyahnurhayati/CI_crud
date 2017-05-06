<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
<center>
	<form action="<?php echo base_url(). 'crud/update';?>" method="post">
		<?php 
			foreach($anggota as $ang) {
		?>
		<table style="margin:20px auto">
			<tr>
				<td>NIM</td>
				<td><input type="hidden" name="no_anggota" value="<?php echo $ang->no_anggota?>"></input>	
				<input type="text" name="nim" value="<?php echo $ang->nim?>"></input></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $ang->nama?>"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $ang->alamat?>"></input></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><input type="text" name="prodi" value="<?php echo $ang->prodi?>"></input></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></input></td>
			</tr>
		</table>
		</form>
		<?php } ?>
</center>
</body>
</html>