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
	<a href='users/add' class="btn btn-primary">Addform</a>
	<a href='users/tampilan2' class="btn btn-primary">Log List</a>
		<table border="1" style="margin:20px auto;">
				<thead>
					<tr>
						<th>ID</th>
						<th>NIM</th>
						<th>Nama Mahasiswa</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>No Handphone</th>
						<th>Edit</th>
						<th>Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($isi as $k0 => $v0) {
						?>
						<tr>
							<td><?php echo $v0['id'] ?></td>
							<td><?php echo $v0['nim'] ?></td>
							<td><?php echo $v0['nama_mhs'] ?></td>
							<td><?php echo $v0['jk'] ?></td>
							<td><?php echo $v0['alamat'] ?></td>
							<td><?php echo $v0['no_hp'] ?></td>
							<td><a href='<?php echo "users/delete/".$v0["id"] ?>'>ubah<a/></td>
							<td><a href='<?php echo "users/delete/".$v0["id"] ?>'>hapus<a/></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
</body>
</html>