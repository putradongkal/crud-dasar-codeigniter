<!DOCTYPE html>
<html>
<head>
	<title>BELAJAR CODEIGNITER 3.1.4 - CRUD DASAR</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/center.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="center">
				<div class="box-center half-width">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3><i class="fa fa-graduation-cap"></i> INPUT MAHASISWA</h3>
							</div>
							<div class="box-body">
								<?php echo form_open(current_url()); ?>
									<div class="form-group">
										<input type="text" name="nim" class="form-control" placeholder="NIM" required>
									</div>
									<div class="form-group">
										<input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa" required>
									</div>
									<div class="form-group">
										<input type="text" name="kelas" class="form-control" placeholder="Kelas" required>
									</div>
									<div class="form-group">
										<input type="text" name="fakultas" class="form-control" placeholder="Fakultas" required>
									</div>
									<br><br>
									<div class="form-group">
										<a href="<?php echo site_url();?>/mahasiswa">
											<button class="btn btn-danger"><i class="fa fa-remove"></i> BATAL</button>
										</a>
										<button class="btn btn-primary" type="submit" name="simpan"><i class="fa fa-save"></i> SIMPAN</button>
									</div>
								</form>
							</div>
						</div>
						<?php echo $error; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>