<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<title><?= $title; ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo4.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
<link rel="stylesheet" href="<?= base_url('assets-public/') ?>fonts/icomoon/style.css">
<link rel="stylesheet" href="<?= base_url('assets-public/') ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url('assets-public/') ?>css/magnific-popup.css">
<link rel="stylesheet" href="<?= base_url('assets-public/') ?>css/jquery-ui.css">
<link rel="stylesheet" href="<?= base_url('assets-public/') ?>css/owl.carousel.min.css">
<link rel="stylesheet" href="<?= base_url('assets-public/') ?>css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?= base_url('assets-public/') ?>css/bootstrap-datepicker.css">


<link rel="stylesheet" href="<?= base_url('assets-public/') ?>fonts/flaticon/font/flaticon.css">

<link rel="stylesheet" href="<?= base_url('assets-public/') ?>css/aos.css">
<link rel="stylesheet" href="<?= base_url('assets-public/') ?>css/jquery.fancybox.min.css">


<link rel="stylesheet" href="<?= base_url('assets-public/') ?>css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border text-primary" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<div class="site-wrap">

		<div class="site-mobile-menu site-navbar-target">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>
		<!-- .site-mobile-menu -->

		<div class="site-navbar-wrap">
			<div class="site-navbar site-navbar-target js-sticky-header">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-3">
							<h1 class="my-0 site-logo"><a href="<?= base_url('Home') ?>"><img src="<?= base_url('assets/images/logo3.png') ?>" style="width: 30px;height: 40px;"></a></h1>
						</div>
						<div class="col-9">
							<nav class="site-navigation text-right" role="navigation">
								<div class="container">
									<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

									<ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
										<li>
											<a href="#home-section" class="nav-link">Beranda</a>
										</li>
										<li>
											<a href="#projects-section" class="nav-link">Project</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="site-blocks-cover overlay" style="background-image: url(<?= base_url('assets-public/images/banner4.jpg') ?>);" data-aos="fade" data-stellar-background-ratio="0.5" id="home-section">
			<div class="container">
				<div class="row align-items-center text-center justify-content-center">
					<div class="col-md-8">
						<h1 class="text-uppercase">Royal Orchid Syariah</h1>
						<span class="sub-text mb-3 d-block"><em>Perumahan Syariah, terjangkau dan tanpa riba</em></span>
					</div>
				</div>
			</div>
		</div>



		<!-- Project Kami  -->
		<div class="site-section" id="projects-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 text-center">
						<h2 class="font-weight-bold text-black">Silahkan Pilih Project</h2>
						<p class="mb-5">Setelah menemukan Projek yang pas, anda bisa klik pilih project dan isi form untuk pendaftaran serta mengisi quisioner</p>
					</div>
				</div>
				<div class="row">
					<?php foreach ($project as $data) : ?>
						<form action="<?= base_url('Home/daftar/' . $data->ID_project); ?>" method="POST">
							<div class="col-sm-12 col-lg-4 col-md-6">
								<div class="card" style="width: 20rem;">
									<a href="<?= base_url('assets/images/project/') . $data->foto; ?>" class="d-block figure mt-4" data-fancybox="gallery">
										<img src=" <?= base_url('assets/images/project/') . $data->foto; ?>" alt="Image" class="img-fluid">
									</a>
									<div class="card-body">
										<h4 class="card-text mb-3 text-center"><strong><?= $data->nama; ?></strong></h4>
										<div class="d-none">
											<input type="text" class="form-control" id="namaproject" placeholder="" value="<?= $data->nama; ?>">
											<input type="text" class="form-control" id="idproject" placeholder="" value="<?= $data->ID_project; ?>">
										</div>
										<div class="row mb-3">
											<div class="col-sm-6">
												<p class="card-text mb-0">Jumlah unit : <strong><?= $data->jumlah_unit; ?></strong> </p>
												<p class="card-text mb-0">Unit isi : <strong><?= $data->unit_isi; ?></strong> </p>
											</div>
											<div class="row float-right">
												<div class="col-sm-12">
													<p class="card-text mb-0">Unit kosong : <strong><?= $data->unit_kosong; ?></strong> </p>
												</div>
											</div>
											<div class="col-sm mt-2">
												<p class="card-text">Alamat : <?= $data->alamat; ?></p>
											</div>
										</div>
										<hr>
										<div class="row justify-content-center"">
										<div class=" col-sm-6">
											<button class="btn btn-sm btn-info float-left detail" id="details" class="wy-text-success" data-toggle="modal" data-target="#projectModal" data-foto="<?= $data->foto; ?>" data-nama="<?= $data->nama; ?>" data-jmlunit="<?= $data->jumlah_unit; ?>" data-unitIsi="<?= $data->unit_isi; ?>" data-unitKosong="<?= $data->unit_kosong; ?>" data-alamat="<?= $data->alamat; ?>" data-deskripsi="<?= $data->deskripsi; ?>"><i class="fa fa-eye pr-2"></i>Lihat details</button>
										</div>
										<div class="col-sm-6">
											<button class="btn btn-sm btn-info float-left detail" id="pilih" type="submit"></i>Pilih Project</button>
						</form>
				</div>
			</div>

		</div>
	</div>
	</div>
<?php endforeach; ?>
</div>
</div>
</div>

<!-- Akhir Project Kami  -->
<!-- Modal details  -->
<div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="projectModalLabel">Detail Project</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="container-fluid">
				<div class="row my-4 mx-3">
					<div class="col-md-2">
						<h6 class="text-muted"><b> Nama</b></h6>
					</div>
					<div class="col-md-9">
						<h6 class="text-muted"> : <span id="nama"></span> </h6>
					</div>

					<div class="col-md-2">
						<h6 class="text-muted mt-1"><b> Jumlah unit</b></h6>
					</div>
					<div class="col-md-9">
						<h6 class="text-muted mt-1"> : <span id="jmlUnit"></span> </h6>
					</div>

					<div class="col-md-2">
						<h6 class="text-muted mt-1"><b> Unit isi</b></h6>
					</div>
					<div class="col-md-9">
						<h6 class="text-muted mt-1"> : <span id="unitIsi"></span> </h6>
					</div>

					<div class="col-md-2">
						<h6 class="text-muted mt-1"><b> Unit kosong</b></h6>
					</div>
					<div class="col-md-9">
						<h6 class="text-muted mt-1"> : <span id="unitKosong"></span> </h6>
					</div>

					<div class="col-md-2">
						<h6 class="text-muted mt-1"><b> Deskripsi</b></h6>
					</div>
					<div class="col-md-9">
						<h6 class="text-muted mt-1"> : <span id="deskripsi"></span> </h6>
					</div>

					<div class="col-md-2">
						<h6 class="text-muted mt-1"><b> Alamat</b></h6>
					</div>
					<div class="col-md-9">
						<h6 class="text-muted mt-1"> : <span id="alamat"></span> </h6>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close detail</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- akhir modal  -->

<div class="site-section" id="kontak" style="background-image: url(<?= base_url('assets-public/images/background-fasilitas.png') ?>);">
	<div class="container">
		<div>
			<div class="border p-5 rounded" style="background-color: rgba(255, 255, 255, 0.7);">
				<dziv class="row" style="opacity: 1;">
					<div style="margin: auto;opacity: 1;">
						<h3 style="margin-top: 40px; text-align: center;">Kesulitan Untuk Mendaftar ?</h3>
						<div style="text-align: center;">
							<button class="btn btn-primary rounded-5 btn-lg" style="margin-top: 5%;">Hubungi Kami</button>
						</div>
					</div>
					<div style="margin: auto;text-align: center; margin-top: 20px;">
						<img width="100px" height="100px" src="<?= base_url('assets-public/') ?>images/telepon.png" alt="Image" class="img-fluid" style="margin-bottom: 10%;">
						<h5>Say hello,</h5>
						<h3>+6222-888-999</h3>
					</div>
				</dziv>
			</div>

		</div>

		<!-- <div style="margin-top: 5%;text-align: center;">
				<a href="<?= base_url('Home/daftar'); ?>">
					<button class="btn btn-warning rounded-5" style="margin-top: 5%; color:white; text-decoration: underline; font-size:xx-large">
						<strong>DAFTAR SEKARANG </strong>
					</button>
				</a>
			</div> -->


	</div>
</div>



<footer class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mb-5 mb-lg-0">
				<div class="row mb-5">
					<div class="col-12">
						<h3 class="footer-heading mb-4">Royal Orchid Syariah</h3>
						<p style="text-align: justify;">ROYAL ORCHID SYARIAH GROUPS merupakan Group pengembang perumahan yang memiliki tag line #TANPA BANK #TANPA RIBA #TANPA DENDA #TANPA SITA. Didirikan pada tahun 2016 di Bandung, Group kami memiliki kegiatan usaha utama di
							bidang properti dan pembangunan perumahan dengan cara melakukan investasi dan penjualan property tanpa bank.</p>
					</div>
				</div>



			</div>

			<div class="col-lg-4 mb-5 mb-lg-0">

				<div class="mb-5">
					<h3 class="footer-heading mb-2">Kontak Kami</h3>

					<h5><img style="margin-right: 20px;" width="20px" height="20px" src="<?= base_url('assets-public/') ?>images/lokasi.png" alt="Image" class="img-fluid">Jln. Reog No. 17a - Turangga Bandung</h5>
					<h5><img style="margin-right: 20px;" width="20px" height="20px" src="<?= base_url('assets-public/') ?>images/email.png" alt="Image" class="img-fluid">info@royalorchidsyariah.com</h5>

				</div>

				<div class="row">
					<div class="col-md-12">
						<h3 class="footer-heading mb-4">Follow Us</h3>

						<div>
							<a href="https://www.facebook.com/royalorchidsyariah.id" class="pl-0 pr-3" target="_blank"><span class="icon-facebook"></span></a>
							<a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
							<a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
							<a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-12">
				<p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | This website is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://sonajaya.com" target="_blank">CV. Sona Jaya Technology</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</div>
</footer>

<script src="<?= base_url('assets-public/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets-public/') ?>js/jquery-ui.js"></script>
<script src="<?= base_url('assets-public/') ?>js/popper.min.js"></script>
<script src="<?= base_url('assets-public/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets-public/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets-public/') ?>js/jquery.countdown.min.js"></script>
<script src="<?= base_url('assets-public/') ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets-public/') ?>js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets-public/') ?>js/aos.js"></script>
<script src="<?= base_url('assets-public/') ?>js/jquery.sticky.js"></script>
<script src="<?= base_url('assets-public/') ?>js/jquery.easing.1.3.js"></script>

<script src="<?= base_url('assets-public/') ?>js/jquery.fancybox.min.js"></script>
<script src="<?= base_url('assets-public/') ?>js/main.js"></script>
<script src="<?= base_url('assets-public/') ?>js/costum.js"></script>

</body>

</html>