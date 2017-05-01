<!DOCTYPE html>
<html>
<head>
	<title>BELAJAR CODEIGNITER 3.1.4 - CRUD DASAR</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo current_url(); ?>/input">
					<button class="btn btn-primary"><i class="fa fa-pencil"></i> Input Mahasiswa Baru</button>
				</a>

				<br><br>
				<?php echo $alert ;?>

				<table class="table table-striped">
					<thead>
						<tr>
							<th class="align-center">#</th>
							<th>NIM</th>
							<th>Nama Mahasiswa</th>
							<th>Kelas</th>
							<th>Fakultas</th>
							<th></th>
						</tr>
					</thead>
					<tbody>

						<?php 
							$no = 0;
							foreach ($mahasiswa as $mhs) {
								$no++;
								echo '<tr>
										<td class="align-center">'.$no.'</td>
										<td>'.$mhs['nim'].'</td>
										<td>'.$mhs['nama_mahasiswa'].'</td>
										<td>'.$mhs['kelas'].'</td>
										<td>'.$mhs['fakultas'].'</td>
										<td class="align-center">
											<a href="'.site_url().'/mahasiswa/hapus?nim='.$mhs['nim'].'">
												<i class="fa fa-trash pointer" title="hapus"></i>
											</a>
											&nbsp;
											<a href="'.site_url().'/mahasiswa/edit?nim='.$mhs['nim'].'">
												<i class="fa fa-pencil pointer" title="edit"></i>
											</a>
										</td>
									 </tr>';
							}
						?>

					</tbody>
				</table>
			</div>
		</div>
	</div>

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>