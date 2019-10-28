<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Portal Berita</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/bootstrap.css'); ?>">
</head>
<body>
	<div class="container">
		<div class="row">
			<div style=" border-radius: 5px;">

			<div style="margin-left: 10px;padding-bottom: 20px"><br>
				<p><b> Date : 
				<?php echo date("l,d-M-Y");?>
				</p>
			</div>
				<div class="row">
					<div class="col-xs-12 col-xm-12 col-md-8 col-lg-8">
						<marquee>Portal Berita Portal Berita Portal Berita Portal Berita Portal Berita Portal Berita Portal Berita Portal berita Portal Berita Portal Berita</marquee>
 						<form method="GET" action="">
							<div class="input-group">
								<input class="form-control" type="search" name="cari" placeholder="Cari Berita">
				 					<span class="input-group-btn"><input class="btn btn-default" type="submit" value="Cari"></span>
							</div>
						</form>
					<?php 
					foreach($berita as $beritaitem){ 
				 	?>
					<div class="col-xs-12 col-xm-12 col-md-12 col-lg-12" style="margin-top: 50px">
						<div class="row">
							<div class="col-xs-12 col-xm-12 col-md-12 col-lg-12">
								<center><h3><b><?php echo $beritaitem['judul']; ?></b></h3></center>
							</div>
						</div>
						<div class="row">
							<div style="margin-top: 20px" class="col-xs-12 col-xm-12 col-md-4 col-lg-4">
								<center><img style="width: 250px; margin-top: 50px" src="<?php echo base_url('assets/image/').$beritaitem['gambar']  ?>"></center>
							</div>
							<div class="col-xs-12 col-xm-12 col-md-8 col-lg-8" style="margin-top: 20px; padding-right: 70px">
								<p style="text-align: justify; text-indent: 60px">
									<?php echo $beritaitem['isi']; ?>
								</p>
							</div>
						</div>
						<div class="row">
							<div  style="margin-top: 20px; margin-left: 20px; margin-right: 100px" class="row">
								<table class="table">
									<tr>
										<td>Narasumber</td>
										<td>:</td>
										<td><?php echo $beritaitem['narasumber']; ?></td>
									</tr>
									<tr>
										<td>Penerbit</td>
										<td>:</td>
										<td><?php echo $beritaitem['penerbit']; ?></td>
									</tr>
									<tr>
										<td>Waktu</td>
										<td>:</td>
										<td><?php echo $beritaitem['waktu']; ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
							
					<?php } ?>
					</div>
					<div class="col-xs-12 col-xm-12 col-md-4 col-lg-4">
						<h3 class="text-center">Tentang Web Portal Berita</h3>
						<center><img width="350px" src="<?php echo base_url('assets/image/beranda.jpg') ?>"></center>
						<p class="text-justify" style="text-indent: 20px">
						Pengertian Website Portal Berita beserta fitur-fiturnya
						Portal web adalah situs web yang menyediakan kemampuan tertentu yang dibuat sedemikian rupa mencoba menuruti selera para pengunjungnya. Kemampuan portal yang lebih spesifik adalah penyediaan kandungan informasi yang dapat diakses menggunakan beragam perangkat, misalnya Komputer Pribadi, komputer jinjing (notebook), PDA (Personal Digital Assistant), atau bahkan telepon genggam.
						Jika anda sudah paham Seperti yang saya sudah paparkan diatas portal berita adalah situs yang menampilkan informasi mengenai informasi yang terjadi ke masyarakat.

						</p>
						<p style="margin-top: 20px"> &copy Muhammad Shihab Kafibaih </p>
						 <?php
							 if ($this->session->userdata('username')) {?>
								<center><a class="btn " href="<?php echo base_url('page/login'); ?>"> Halaman Admin</a></center>
							<?php }else{ ?>
								<center><a class="btn " href="<?php echo base_url('page/login'); ?>"> Login</a></center>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>