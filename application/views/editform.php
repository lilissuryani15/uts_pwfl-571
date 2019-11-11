<!DOCTYPE html>
<html>
<head>
	<base href="<?= base_url() ?>">
	<title>Update Data</title>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">UTS PEMROGRAMAN WEB *Data Mahasiswa*</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Edit Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span></h3>
		<form method="post" action="<?php echo base_url('users/update')?>" enctype="multipart/form-data">
			<table>
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" value="<?php echo $nim ?>"></td>
				</tr>

				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama_mhs" value="<?php echo $nama_mhs ?>"></td>
				</tr>

				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<input type="radio" name="jk" value="Laki-laki" <?php echo $jenis_kelamin == 'L' ? 'chechked' : '' ?>>Laki-laki
						<input type="radio" name="jk" value="Perempuan" <?php echo $jenis_kelamin == 'P' ? 'chechked' : '' ?>>Perempuan
					</td>
				</tr>

				<tr>
					<td>Alamat</td>
					<td>:</td> 
					<td><input type="text" name="alamat" value="<?php echo $alamat ?>"></td>
				</tr>

				<tr>
					<td>Nomer Hp</td>
					<td>:</td> 
					<td><input type="text" name="no_hp" value="<?php echo $no_hp ?>"></td>
				</tr>

				<tr>
					<td>
						<input type="submit" name="simpan" value="Update">
						<a href="<?php echo base_url().'users/tampilan';?>"><input type="button" value="Batal"></a>
					</td>
				</tr>
			</table>
			
		</div>
	</div>
</div>
</body>
</html>