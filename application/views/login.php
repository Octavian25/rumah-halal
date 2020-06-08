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

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo" style="text-align: center;margin-top: 20px;">
                    <a>
                        <img class="align-content" src="<?php echo base_url() ?>assets/images/logo3.png" alt="" height="180px">
                    </a>
                </div>
                <div class="login-form">
                    <form action="<?php echo base_url('Home/home'); ?>" method="post">
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
                        <div class="form-group">
                            <label style="color: white;">Email:</label>
                            <input type="email" id="ktp" name="ktp" class="form-control" placeholder="Email" value="<?= set_value('ktp'); ?>">
                        </div>
                        <div class="form-group">
                            <label style="color: white;">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <div class="register-link m-t-15 text-center" style="margin-top: 20px;">
                            <a href="<?php echo base_url('Home/home'); ?>">
                                <img class="align-content" src="<?php echo base_url() ?>assets/images/google.jpg" alt="SIGN IN WITH GOOGLE">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php $this->load->view('js'); ?>


</body>

</html>