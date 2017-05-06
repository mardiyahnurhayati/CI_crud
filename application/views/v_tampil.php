<!DOCTYPE html>
<html>
<head>
	<title>CRUD Anggota dengan CodeIgniter</title>
</head>
<body>
<center>
	<h1>Membuat CRUD Anggota Perpustakaan</h1>	

<table border="1" cellspacing="0" cellpadding="10">
	<tr>
		<th>No Anggota</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Prodi</th>	
		<th>Aksi</th>
	</tr>
	<?php
	foreach ($anggota as $ang) {
		?>
	<tr>
		<td><?php echo $ang->no_anggota;?></td>
		<td><?php echo $ang->nim;?></td>
		<td><?php echo $ang->nama;?></td>
		<td><?php echo $ang->alamat;?></td>
		<td><?php echo $ang->prodi;?></td>
		<td>
			<?php echo anchor('crud/edit/'.$ang->no_anggota,'Edit');?> 
			<?php echo anchor('crud/hapus/'.$ang->no_anggota,'Hapus');?> 	
		</td>
	</tr>	
	<?php } ?>

</table>
<?php echo anchor('crud/tambah','Tambah Data'); ?>
</center>
</body>
</html>