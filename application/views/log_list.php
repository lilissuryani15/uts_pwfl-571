<!DOCTYPE html>
<html>
<head>
	<base href="<?= base_url() ?>">
	<title>Tampil Data</title>
</head>
<body>
	<center>
		<h1>Tampil Data</h1>
	</center>
		<table border="1" style="margin:20px auto;">
			<thead>
	<tr>
		<th>ID</th>
		<th>Nim</th>
		<th>No Hp Lama</th>
		<th>No Hp Baru</th>
		<th>Tanggal Diubah</th>
		</tr>
	</thead>
		<?php
		foreach ($isi as $k0 => $v0) {
		?>
		<tr>
			<td><?php echo $v0['id'] ?></td>
			<td><?php echo $v0['nim'] ?></td>
			<td><?php echo $v0['no_hp_lama'] ?></td>
			<td><?php echo $v0['no_hp_baru'] ?></td>
			<td><?php echo $v0['tgl_diubah'] ?></td>
		</tr>
		<?php } ?>
		</table>
		<a href="<?php echo base_url().'users/tampilan';?>"><input type="button" value="Kembali"></a>
	</form>	
</body>
</html>