<!DOCTYPE html>
<html>
<head>
	<base href="<?= base_url() ?>">
	<title>Tambah Data </title>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">UTS PEMROGRAMAN WEB *Data Mahasiswa*</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url('users/insert')?>" enctype="multipart/form-data">
				<div class="form-group">
					<label>NIM:</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="nim"placeholder="NIM">
					</div>
				</div>
				<div class="form-group">
					<label>Nama Mahasiswa:</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="nama_mhs"placeholder="Nama_mhs">
					</div>
				</div>
				<div class="form-group">
					<label>Jenis Kelamin:</label>
					<input class="form-check-input" type="radio" name="jenis_kelamin" id="L" value="Laki-Laki">
            Laki -Laki
     </label>
 	 <input class="form-check-input" type="radio" name="jenis_kelamin" id="P" value="Perempuan">
            Perempuan
        </label>
				</div>
				<div class="form-group row">
					<label for="Alamat" class="col-sm-2 col-form-label">Alamat:</label>
					<div class="col-sm-10">
			<input type="text" class="form-control" name="alamat"placeholder="Alamat">
			</div>
					
				</div>
				<div class="form-group">
					<label for="No_hp" class="col-sm-2 col-form-label">No Handphone:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="no_hp"placeholder="No_hp">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<input type="submit" name="simpan" class="btn btn-primary" value="simpan">
					</div>	
					<div class="col-auto">
						<div class="col-sm-10">
							<a href="<?php echo base_url()."users/tampilan";?>"><input type="button" class="btn btn-primary" value="Batal"></a>
						</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>