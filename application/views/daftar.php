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
<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/smart_wizard.min.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/smart_wizard_theme_circles.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/smart_wizard_theme_dots.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



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


        <div class="site-navbar-wrap ">
            <div class="site-navbar site-navbar-target js-sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="my-0 site-logo"><a href="<?= base_url('Home') ?>"><img src="<?= base_url('assets/images/logo3.png') ?>" style="width: 30px;height: 40px;"></a></h3>
                        </div>
                        <div class="col-4">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                                    <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                        <li>
                                            <a href="<?= base_url('home') ?>#home-section" class="nav-link">Beranda</a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" style="background-image: url(<?= base_url('assets-public/images/banner5.png') ?>);height: 500px;" data-aos="fade" data-stellar-background-ratio="0.8" id="home-section">
            <div class="container">

            </div>
        </div>

        <div class="container">
            <br />
            <form action="<?php echo base_url('Home/simpanDataPelanggan'); ?>" id="myForm" role="form" data-toggle="validator" method="post" enctype="multipart/form-data">

                <!-- SmartWizard html -->
                <div id="smartwizard">
                    <ul>
                        <li><a href="#step-1">Step 1<br /><small>Pilih Kavling</small></a></li>
                        <li><a href="#step-2">Step 2<br /><small>Data Diri</small></a></li>
                        <li><a href="#step-3">Step 3<br /><small>Angsuran Lain</small></a></li>
                        <li><a href="#step-4">Step 4<br /><small>Quisioner</small></a></li>
                    </ul>

                    <div>
                        <div id="step-2">
                            <br>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="noktp">No KTP:</label>
                                    <input type="number" class="form-control" name="noktp" id="noktp" placeholder="Masukan No KTP" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Lengkap Sesuai KTP" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan:</label>
                                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Masukan Pekerjaan" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="ttl">Tempat Tanggal Lahir:</label>
                                    <input type="text" class="form-control" name="ttl" id="ttl" placeholder="Masukan Tempat Tanggal Lahir" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <input type="text" class="form-control" name="status" id="status" placeholder="Masukan Status" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="jmltunggangan">Jumlah Tanggungan:</label>
                                    <input type="number" class="form-control" name="jmltanggungan" id="jmltanggusngan" placeholder="Masukan Jumlah Tunggangan" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="alamat">Alamat:</label>
                                    <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat" required=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="notlp">No Telepon:</label>
                                    <input type="text" class="form-control" name="notlp" id="notlp" placeholder="Masukan No Telepon" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="notlp">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukan No Telepon" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="stsrumah">Status Rumah:</label>
                                    <input type="text" class="form-control" name="stsrumah" id="stsrumah" placeholder="Masukan Status Rumah" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="lmmenetap">Lama Menetap:</label>
                                    <input type="number" class="form-control" name="lmmenetap" id="lmmenetap" placeholder="Masukan Lama Menetap" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan:</label>
                                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Masukan Pekerjaan" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="lmbekerja">Lama Bekerja:</label>
                                    <input type="number" class="form-control" name="lmbekerja" id="lmbekerja" placeholder="Masukan Lama Bekerja" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="nmtpbekerja">Nama Tempat Bekerja:</label>
                                    <input type="text" class="form-control" name="nmtpbekerja" id="nmtpbekerja" placeholder="Masukan Nama Tempat Bekerja" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="altpbekerja">Alamat Tempat Bekerja:</label>
                                    <textarea class="form-control" name="altpbekerja" id="altpbekerja" placeholder="Masukan Alamat Tempat Bekerja" required=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="inbulanan">Income Bulanan:</label>
                                    <input type="text" class="form-control" name="inbulanan" id="inbulanan" placeholder="Masukan Jumlah Income Bulanan" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="inblnpasangan">Income Bulanan Pasangan:</label>
                                    <input type="text" class="form-control" name="inblnpasangan" id="inblnpasangan" placeholder="Masukan Jumlah Income Bulanan Pasangan" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="norek">No Rekening:</label>
                                    <input type="text" class="form-control" name="norek" id="norek" placeholder="Masukan No Rekening" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="nmktdarurat">Nama Kontak Darurat:</label>
                                    <input type="text" class="form-control" name="nmktdarurat" id="nmktdarurat" placeholder="Masukan Nama Kontak Darurat" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="alktdarurat">Alamat Kontak Darurat:</label>
                                    <textarea class="form-control" name="alktdarurat" id="alktdarurat" placeholder="Masukan Alamat Kontak Darurat" required=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-0" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="noktdarurat">No Kontak Darurat:</label>
                                    <input type="text" class="form-control" name="noktdarurat" id="noktdarurat" placeholder="Masukan No Kontak Darurat" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div id="step-3">
                            <h2>Angsuran Lain</h2>
                            <!-- Buat tombol untuk menabah form data -->
                            <button type="button" class="btn btn-success" id="btn-tambah-form">Tambah Data Angsuran</button>
                            <button type="button" class="btn btn-warning" id="btn-reset-form">Reset Form</button><br><br>
                            <b>Data ke 1 :</b>
                            <div id="form-step-2" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="nama_angsuran">Nama Angsuran</label>
                                    <input type="text" class="form-control" name="nama_angsuran[]" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-2" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="angsuranke">Angsuran Ke-</label>
                                    <input type="number" class="form-control" name="angsuranke[]" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-2" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="angsuranke">Jumlah</label>
                                    <input type="number" class="form-control" name="jumlah[]" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div id="form-step-2" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="nominal_angsuran_lain">Nominal Angsuran Lain</label>
                                    <input type="text" class="form-control" name="nominal_angsuran_lain[]" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <br>

                            <div id="insert-form"></div>
                            <input type="hidden" id="jumlah-form" value="1">
                        </div>
                        <div id="step-4">
                            <br>
                            <h3>PETUNJUK BAGIAN I</h3>
                            <p>Pada bagian ini, Bapak/ Ibu diminta untuk menanggapi setiap pernyataan yang tersedia dengan cara memberikan tanda silang (x) di salah satu respon jawaban yang tersedia dengan ketentuan sebagai berikut:
                            </p><br>
                            <p>SS : Sangat Setuju
                                S : Setuju
                                N : Netral
                                TS : Tidak Setuju
                                STS : Sangat Tidak Setuju
                            </p>
                            <p>
                                Isikan respon berdasarkan keadaan Bapak/ Ibu sehari-hari karena tidak ada jawaban benar atau jawaban salah. Jawaban terbaik adalah jawaban yang paling mencerminkan keadaan Bapak/ Ibu yang sebenarnya. Tidak ada batasan waktu pengerjaan, pastikan bahwa setiap pernyataan dibaca dengan baik dan dipahami isinya. Jika telah selesai mengerjakan teliti kembali untuk memastikan semua pernyataan telah diisi.
                            </p>
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Jika saya baru mendapat uang, saya akan menggunakannyauntuk melunasi hutang terlebih dahulu
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio1-1" name="radio1" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio1-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio1-2" name="radio1" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio1-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio1-3" name="radio1" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio1-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio1-4" name="radio1" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio1-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio1-5" name="radio1" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio1-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya bersegera melunasi hutang
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio2-1" name="radio2" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio2-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio2-2" name="radio2" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio2-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio2-3" name="radio2" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio2-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio2-4" name="radio2" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio2-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio2-5" name="radio2" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio2-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya mudah untuk berhutang, namun sulit melunasinya
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio3-1" name="radio3" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio3-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio3-2" name="radio3" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio3-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio3-3" name="radio3" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio3-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio3-4" name="radio3" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio3-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio3-5" name="radio3" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio3-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya tertarik pada layanan tabungan di bank dengan bunga besar
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio4-1" name="radio4" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio4-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio4-2" name="radio4" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio4-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio4-3" name="radio4" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio4-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio4-4" name="radio4" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio4-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio4-5" name="radio4" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio4-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya menyarankan orang untuk hutang bank saja daripada harus saya yang meminjamkan uang padanya
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio5-1" name="radio5" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio5-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio5-2" name="radio5" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio5-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio5-3" name="radio5" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio5-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio5-4" name="radio5" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio5-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio5-5" name="radio5" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio5-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Menurut saya syariat Islam terlalu rumit untuk diterapkan dalam kehidupan sehari-hari
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio6-1" name="radio6" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio6-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio6-2" name="radio6" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio6-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio6-3" name="radio6" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio6-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio6-4" name="radio6" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio6-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio6-5" name="radio6" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio6-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Jika melanggar syariat Islam hidup saya diliputi rasa berdosa
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio7-1" name="radio7" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio7-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio7-2" name="radio7" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio7-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio7-3" name="radio7" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio7-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio7-4" name="radio7" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio7-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio7-5" name="radio7" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio7-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Menurut saya syariat Islam terlalu rumit untuk diterapkan dalam kehidupan sehari-hari
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio8-1" name="radio8" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio8-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio8-2" name="radio8" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio8-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio8-3" name="radio8" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio8-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio8-4" name="radio8" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio8-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio8-5" name="radio8" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio8-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya memiliki catatan pembayaran barang yang belum lunas supaya saya tidak lupa
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio9-1" name="radio9" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio9-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio9-2" name="radio9" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio9-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio9-3" name="radio9" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio9-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio9-4" name="radio9" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio9-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio9-5" name="radio9" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio9-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya akan berkomitmen melunasi pembayaran setelah mengumpulkan cukup informasi tentang suatu barang yang dibeli
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio10-1" name="radio10" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio10-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio10-2" name="radio10" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio10-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio10-3" name="radio10" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio10-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio10-4" name="radio10" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio10-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio10-5" name="radio10" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio10-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Cara musyawarah dapat ditempuh jika saya mengalami masalah dalam bertransaksi dengan penjual
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio11-1" name="radio11" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio11-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio11-2" name="radio11" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio11-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio11-3" name="radio11" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio11-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio11-4" name="radio11" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio11-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio11-5" name="radio11" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio11-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya memberikan informasi atau dokumen pribadi yang valid sebagai bukti bahwa saya sungguh-sungguh akan melunasi angsuran
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio12-1" name="radio12" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio12-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio12-2" name="radio12" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio12-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio12-3" name="radio12" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio12-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio12-4" name="radio12" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio12-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio12-5" name="radio12" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio12-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya akan bertanggungjawab penuh atas angsuran barang, dari awal sampai lunas
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio13-1" name="radio13" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio13-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio13-2" name="radio13" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio13-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio13-3" name="radio13" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio13-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio13-4" name="radio13" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio13-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio13-5" name="radio13" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio13-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya akan menjalankan kewajiban sebagai pembeli terlebih dahulu, setelah itu hak saya akan terpenuhi
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio14-1" name="radio14" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio14-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio14-2" name="radio14" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio14-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio14-3" name="radio14" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio14-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio14-4" name="radio14" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio14-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio14-5" name="radio14" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio14-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya menerapkan syariat Islam dalam kehidupan dengan ikhlas
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio15-1" name="radio15" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio15-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio15-2" name="radio15" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio15-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio15-3" name="radio15" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio15-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio15-4" name="radio15" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio15-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio15-5" name="radio15" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio15-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Apabila melakukan hal yang tidak diperbolehkan dalam syariat Islam saya segera bertaubat
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio16-1" name="radio16" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio16-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio16-2" name="radio16" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio16-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio16-3" name="radio16" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio16-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio16-4" name="radio16" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio16-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio16-5" name="radio16" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio16-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya tidak berani melanggar syariat Islam karena takut Allah tidak meridhoi kehidupan saya
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio17-1" name="radio17" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio17-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio17-2" name="radio17" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio17-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio17-3" name="radio17" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio17-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio17-4" name="radio17" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio17-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio17-5" name="radio17" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio17-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya memanfaatkan jasa bank yang dirancang modern, praktis, dan memiliki suku bunga tinggi
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio18-1" name="radio18" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio18-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio18-2" name="radio18" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio18-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio18-3" name="radio18" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio18-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio18-4" name="radio18" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio18-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio18-5" name="radio18" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio18-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya meminjamkan uang kepada orang lain yang membutuhkan tanpa mencari keuntungan uang tambahan
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio19-1" name="radio19" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio19-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio19-2" name="radio19" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio19-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio19-3" name="radio19" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio19-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio19-4" name="radio19" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio19-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio19-5" name="radio19" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio19-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Sebagai seorang muslim saya wajib sadar terhadap keharaman riba
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio20-1" name="radio20" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio20-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio20-2" name="radio20" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio20-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio20-3" name="radio20" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio20-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio20-4" name="radio20" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio20-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio20-5" name="radio20" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio20-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Apabila ingin berhutang, maka saya bertekad dalam hati yang jujur untuk segera melunasi hutang tersebut
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio21-1" name="radio21" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio21-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio21-2" name="radio21" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio21-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio21-3" name="radio21" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio21-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio21-4" name="radio21" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio21-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio21-5" name="radio21" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio21-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">

                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya menjadi orang yang dzalim jika meminjam uang pada orang lain dan menunda pelunasannya

                                    <p>Respon:</p>
                                </h6>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio22-1" name="radio22" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio22-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio22-2" name="radio22" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio22-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio22-3" name="radio22" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio22-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio22-4" name="radio22" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio22-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio22-5" name="radio22" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio22-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">

                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya mampu menahan diri untuk tidak membeli barang lain saat masih punya hutang

                                    <p>Respon:</p>
                                </h6>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio23-1" name="radio23--" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio23-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio23-2" name="radio23--" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio23-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio23-3" name="radio23--" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio23-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio23-4" name="radio23--" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio23-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio23-5" name="radio23--" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio23-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya merasa bersalah pada diri sendiri jika memiliki banyak hutang
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio24-1" name="radio24" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio24-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio24-2" name="radio24" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio24-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio24-3" name="radio24" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio24-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio24-4" name="radio24" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio24-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio24-5" name="radio24" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio24-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya akan nekad kabur seandainya terlilit hutang yang tidak mungkin saya lunasi
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio25-1" name="radio25" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio25-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio25-2" name="radio25" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio25-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio25-3" name="radio25" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio25-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio25-4" name="radio25" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio25-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio25-5" name="radio25" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio25-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Islam adalah agama yang sempurna dan saya berusaha menjauhi larangan Allah agar dapat menjadi hamba yang taat
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio26-1" name="radio26" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio26-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio26-2" name="radio26" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio26-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio26-3" name="radio26" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio26-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio26-4" name="radio26" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio26-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio26-5" name="radio26" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio26-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Hak saya sebagai pembeli akan dipenuhi oleh penjual ketika saya sudah melaksanakan kewajiban saya kepadanya
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio27-1" name="radio27" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio27-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio27-2" name="radio27" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio27-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio27-3" name="radio27" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio27-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio27-4" name="radio27" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio27-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio27-5" name="radio27" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio27-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Apabila ada masalah di kemudian hari yang berkaitan dengan transaksi jual beli, saya bersedia untuk menyelesaikan sampai tuntas
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio28-1" name="radio28" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio28-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio28-2" name="radio28" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio28-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio28-3" name="radio28" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio28-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio28-4" name="radio28" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio28-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio28-5" name="radio28" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio28-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Sebagai pembeli saya akan membayar barang angsuran tidaklebih dari waktu yang disepakati
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio29-1" name="radio29" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio29-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio29-2" name="radio29" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio29-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio29-3" name="radio29" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio29-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio29-4" name="radio29" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio29-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio29-5" name="radio29" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio29-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya bersedia terbuka dan jujur membicarakan masalah lebih dari waktu yang disepakati
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio30-1" name="radio30" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio30-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio30-2" name="radio30" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio30-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio30-3" name="radio30" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio30-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio30-4" name="radio30" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio30-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio30-5" name="radio30" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio30-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya bersedia dipantau/ monitoring apabila pihak penjual menemukan permasalahan saya dalam melunasi barang
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio31-1" name="radio31" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio31-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio31-2" name="radio31" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio31-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio31-3" name="radio31" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio31-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio31-4" name="radio31" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio31-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio31-5" name="radio31" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio31-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya merasa hidup lebih terarah dan tenang dengan menerapkan syariat Islam
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio32-1" name="radio32" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio32-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio32-2" name="radio32" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio32-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio32-3" name="radio32" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio32-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio32-4" name="radio32" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio32-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio32-5" name="radio32" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio32-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Allah mengharamkan riba dan saya taat pada ketentuan tersebut
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio33-1" name="radio33" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio33-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio33-2" name="radio33" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio33-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio33-3" name="radio33" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio33-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio33-4" name="radio33" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio33-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio33-5" name="radio33" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio33-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Saya memiliki tabungan supaya bila ada hutang yang ternyata lupa belum dibayar, bisa segera saya lunasi
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio34-1" name="radio34" class="custom-control-input" value="5">
                                    <label class="custom-control-label" for="radio34-1">Sangat Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio34-2" name="radio34" class="custom-control-input" value="4">
                                    <label class="custom-control-label" for="radio34-2">Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio34-3" name="radio34" class="custom-control-input" value="3">
                                    <label class="custom-control-label" for="radio34-3">Netral</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio34-4" name="radio34" class="custom-control-input" value="2">
                                    <label class="custom-control-label" for="radio34-4">Tidak Sesuai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio34-5" name="radio34" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio34-5">Sangat Tidak Sesuai</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <br>
                            <h4 style="text-align: center;">Pilih jawaban Benar dan Salah</h4>
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Hutang tidak harus dilunasi jika pihak yang memberi pinjaman saja sudah lupa
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio35-1" name="radio35" class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="radio35-1">Benar</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio35-2" name="radio35" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio35-2">Salah</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Terdapat tata cara di Al Quran dan hadits yang diatur oleh Islam dalam melakukan transaksi hutang
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio36-1" name="radio36" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio36-1">Benar</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio36-2" name="radio36" class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="radio36-2">Salah</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Penambahan yang ditarik dari hutang adalah salah satu bentuk riba
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio37-1" name="radio37" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio37-1">Benar</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio37-2" name="radio37" class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="radio37-2">Salah</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Adanya denda karena keterlambatan pelunasan hutang adalah bentuk praktik riba
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio38-1" name="radio38" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio38-1">Benar</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio38-2" name="radio38" class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="radio38-2">Salah</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Islam telah mengatur syarat dan rukun yang harus dipenuhi dalam transaksi jual beli
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio39-1" name="radio39" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio39-1">Benar</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio39-2" name="radio39" class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="radio39-2">Salah</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                            <div style="margin-top: 10px;">
                                <br>
                                <p>Pertanyaan:</p>
                                <h6>Segala sisi kehidupan manusia berpedoman kepada Al Quran dan hadits
                                </h6>
                                <p>Respon:</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio40-1" name="radio40" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="radio40-1">Benar</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radio40-2" name="radio40" class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="radio40-2">Salah</label>
                                </div>
                            </div> <!-- // akhir pertanyaan -->
                        </div>
                        <div id="step-1">
                            <?php foreach ($unit as $key) :
                                $namaproject = $key->nama;
                            ?>
                            <?php endforeach; ?>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Project</label>
                                <input type="email" class="form-control" id="namaproject" placeholder="Di ambil otomatis dari pilih project" value="<?= $namaproject ?>">
                            </div>
                            <div class="form-group d-none">
                                <label for="exampleFormControlInput1"> ID Project</label>
                                <input type="email" class="form-control" id="namaproject" placeholder="Di ambil otomatis dari pilih project" value="<?= $id ?>">
                            </div>
                            <div class=" form-group">
                                <label for="exampleFormControlSelect1">Unit Tersedia</label>
                                <select class="form-control" id="unit" name="unit">
                                    <option value="" selected>Pilih Unit</option>
                                    <?php foreach ($unit as $key) : ?>

                                        <option value="<?= $key->ID_unit; ?>"> Nomor: <?= $key->nomor; ?> /Type: <?= $key->type; ?>/Luas Bangunan: <?= $key->luas_bangunan; ?> /Luas Tanah: <?= $key->luas_tanah; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">DP</label>
                                    <input type="text" class="form-control" id="dp" placeholder="Nominal DP" name="dp">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Lama Angsuran DP</label>
                                    <select class="custom-select my-1 mr-sm-2" id="lama_angsuran_dp" name="lama_angsuran_dp">
                                        <option selected>Choose...</option>
                                        <option value="0">Cash</option>
                                        <option value="3">3 bulan</option>
                                        <option value="6">6 bulan</option>
                                        <option value="10">10 bulan</option>
                                        <option value="12">12 bulan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Angsuran DP</label>
                                    <input type="text" class="form-control" id="angsuran_dp" placeholder="Nominal Angsuran DP" name="angsuran_dp">
                                </div>
                            </div>
                            <div class="form-row">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Injeksi</label>
                                    <input type="text" class="form-control" id="injeksi" placeholder="Nominal Injek" name="injeksi">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Lama Injeksi (Tahun)</label>
                                    <input type="number" class="form-control" id="lama_injeksi" placeholder="5 Tahun" name="lama_injeksi">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Total Injeksi</label>
                                    <input type="text" name="total_injeksi" id="total_injeksi" class="form-control">
                                    <br>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan Harga">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Lama Angsuran </label>
                                    <select class="custom-select my-1 mr-sm-2" id="lama_angsuran_bulanan" name="lama_angsuran_bulanan">
                                        <option selected>Choose...</option>
                                        <option value="0">Cash</option>
                                        <option value="12">12 bulan / 1 tahun</option>
                                        <option value="24">24 bulan / 2 tahun</option>
                                        <option value="36">36 bulan / 3 tahun</option>
                                        <option value="48">48 bulan / 4 tahun</option>
                                        <option value="60">60 bulan / 5 tahun</option>
                                        <option value="70">72 bulan / 6 tahun</option>
                                        <option value="84">84 bulan / 7 tahun</option>
                                        <option value="96">96 bulan / 8 tahun</option>
                                        <option value="108">108 bulan / 9 tahun</option>
                                        <option value="120">120 bulan / 10 tahun</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Angsuran perbulan</label>
                                    <input type="text" class="form-control" id="angsuran_bulanan" name="angsuran_bulanan" placeholder="Nominal angsuran per bulan">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Footer -->
        <footer class="site-footer border-top">
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

                    <div class="col-lg-4 mb-5 mb-lg-0">

                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Navigation</h3>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#">Beranda</a></li>
                                    <li><a href="#">Project</a></li>
                                    <li><a href="#">Tentang Kami</a></li>
                                    <li><a href="#">Kontak</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
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


</body>
<?php $this->load->view('js'); ?>

</html>