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

<script src="<?php echo base_url() ?>assets/plugins/sweetalerts/sweetalert2.all.min.js"></script>
<!-- Include jQuery Validator plugin -->
<script src="<?php echo base_url() ?>assets/dist/js/validator.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
<script src="<?php echo base_url() ?>assets/assets/js/jquery.maskMoney.js" type="text/javascript"></script>

<?php if ($this->session->flashdata('msg') == 'success-hapus') : ?>
    <script type="text/javascript">
        Swal.fire({
            title: 'Terimakasih',
            text: 'Data Berhasil Dihapus',
            type: 'success'
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'success-update') : ?>
    <script type="text/javascript">
        Swal.fire({
            title: 'Terimakasih',
            text: 'Data Berhasil Di Update',
            type: 'success'
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'validasi') : ?>
    <script type="text/javascript">
        Swal.fire({
            title: 'Perhatian !',
            text: 'Silahkan Isi Seluruh Form !',
            type: 'warning'
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'success') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Success',
            text: "Data Berhasil disimpan ke database.",
            showHideTransition: 'slide',
            icon: 'success',
            allowToastClose: false,
            hideAfter: 5000,
            position: 'top-right',
            bgColor: '#7EC857'
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'success-login') : ?>
    <script type="text/javascript">
        Swal.fire({
            title: 'Terimakasih',
            text: 'Selamat Datang <?php echo $this->session->userdata('nama'); ?>.',
            type: 'success'
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'success-registration') : ?>
    <script type="text/javascript">
        swal.fire({
            title: "Terimakasih",
            text: "Data sudah tersimpan, silahkan login",
            type: "success"
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'error-register') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Perhatian !',
            text: "Field Masih ada yang kosong, silahkan isi terlebih dahulu",
            showHideTransition: 'slide',
            icon: 'warning',
            allowToastClose: false,
            hideAfter: 5000,
            position: 'top-right',
            bgColor: 'orange'
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'error-simpan') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Perhatian !',
            text: "Gagal Menyimpan Data",
            showHideTransition: 'slide',
            icon: 'error',
            allowToastClose: false,
            hideAfter: 5000,
            position: 'top-right',
            bgColor: 'orange'
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'success-add-data') : ?>
    <script type="text/javascript">
        Swal.fire({
            title: 'Terimakasih',
            text: 'Data sudah tersimpan',
            type: 'success'
        });
    </script>
<?php else : ?>
<?php endif; ?>

<script type="text/javascript">
    $(document).ready(function() {
        // Toolbar extra buttons
        var btnFinish = $('<button></button>').text('Finish')
            .addClass('btn btn-info')
            .on('click', function() {
                if (!$(this).hasClass('disabled')) {
                    var elmForm = $("#myForm");
                    if (elmForm) {
                        elmForm.validator('validate');
                        var elmErr = elmForm.find('.has-error');
                        if (elmErr && elmErr.length > 0) {
                            $.toast({
                                heading: 'Peringatan',
                                text: "Silahkan Isi Seluruh Form !",
                                showHideTransition: 'slide',
                                icon: 'error',
                                hideAfter: false,
                                position: 'bottom-right',
                                bgColor: '#FF4859'
                            });
                            return false;
                        } else {
                            alert('Selamat! Pendataran anda berhasil dilakukan.');
                            elmForm.submit();
                            return false;
                        }
                    }
                }
            });
        var btnCancel = $('<button></button>').text('Cancel')
            .addClass('btn btn-danger')
            .on('click', function() {
                $('#smartwizard').smartWizard("reset");
                $('#myForm').find("input, textarea").val("");
            });



        // Smart Wizard
        $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'arrows',
            transitionEffect: 'fade',
            toolbarSettings: {
                toolbarPosition: 'bottom',
                toolbarExtraButtons: [btnFinish, btnCancel]
            },
            anchorSettings: {
                markDoneStep: true, // add done css
                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
            }
        });

        $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
            var elmForm = $("#form-step-" + stepNumber);
            // stepDirection === 'forward' :- this condition allows to do the form validation
            // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
            if (stepDirection === 'forward' && elmForm) {
                elmForm.validator('validate');
                var elmErr = elmForm.children('.has-error');
                if (elmErr && elmErr.length > 0) {
                    // Form validation failed
                    return false;
                }
            }
            return true;
        });

        $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
            // Enable finish button only on last step
            if (stepNumber == 3) {
                $('.btn-finish').removeClass('disabled');
            } else {
                $('.btn-finish').addClass('disabled');
            }
        });

    });
</script>

<script>
    $(document).ready(function() { // Ketika halaman sudah diload dan siap
        $("#btn-tambah-form").click(function() { // Ketika tombol Tambah Data Form di klik
            var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
            var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

            // Kita akan menambahkan form dengan menggunakan append
            // pada sebuah tag div yg kita beri id insert-form
            $("#insert-form").append("<b>Data ke " + nextform + " :</b>" +
                "<div id='form-step-2' role='form' data-toggle='validator'>" +
                "<div class='form-group'>" +
                "<label for='nama_angsuran'>Nama Angsuran</label>" +
                "<input type='text' class='form-control' name='nama_angsuran[]' required>" +
                "<div class='help-block with-errors'></div>" +
                "</div>" +
                "</div>" +
                "<div id='form-step-2' role='form' data-toggle='validator'>" +
                "<div class='form-group'>" +
                "<label for='angsuranke'>Angsuran Ke-</label>" +
                "<input type='text' class='form-control' name='angsuranke[]' required>" +
                "<div class='help-block with-errors'></div>" +
                "</div>" +
                "</div>" +
                "<div id='form-step-2' role='form' data-toggle='validator'>" +
                "<div class='form-group'>" +
                "<label for='nominal_angsuran_lain'>Nominal Angsuran Lain</label>" +
                "<input type='text' class='form-control' name='nominal_angsuran_lain[]'' required>" +
                "<div class='help-block with-errors'></div>" +
                "</div>" +
                "</div>" +
                "<br>");

            $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
        });

        // Buat fungsi untuk mereset form ke semula
        $("#btn-reset-form").click(function() {
            $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
            $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
        });
    });
</script>

<!-- Image upload view -->
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>

<script type="text/javascript">
    $(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
        $("#unit").change(function() { // Ketika user mengganti atau memilih data project
            $("#dp").hide(); // Sembunyikan dulu combobox unit nya
            $("#harga").hide(); // Sembunyikan dulu combobox unit nya

            $.ajax({
                type: "POST", // Method pengiriman data bisa dengan GET atau POST
                url: "<?php echo base_url("Home/get_harga"); ?>", // Isi dengan url/path file php yang dituju
                data: {
                    id_project: $("#unit").val()
                }, // data yang akan dikirim ke file yang dituju
                dataType: "json",
                beforeSend: function(e) {
                    if (e && e.overrideMimeType) {
                        e.overrideMimeType("application/json;charset=UTF-8");
                    }
                },
                success: function(response) { // Ketika proses pengiriman berhasil

                    // set isi dari combobox unit
                    // lalu munculkan kembali combobox unit
                    $("#dp").val(response.list_unit).show().toLocal;
                    $("#harga").val(response.list_unit2).show();
                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#lama_angsuran_dp").change(function() {
            var dpclean = $("#dp").val().replace(/[^\d]/g, '');
            var dp = parseInt(dpclean);
            var l_a_d = parseInt($("#lama_angsuran_dp").val());

            if (l_a_d == 0) {
                $("#angsuran_dp").val(dp);
            } else {
                var total = (dp / l_a_d);
                var bagi = total / 1000;
                var dibulatkan = Math.floor(bagi);
                var hasilnya = parseInt(dibulatkan * 1000).toLocaleString('id-ID');
                $("#angsuran_dp").val(hasilnya);
            }

        });

        $("#lama_injeksi").keyup(function() {
            var injekclean = $("#injeksi").val().replace(/[^\d]/g, '');
            var injeksi = parseInt(injekclean);
            var lama_injeksi = parseInt($("#lama_injeksi").val());
            var total = (injeksi * lama_injeksi).toLocaleString('id-ID');
            $("#total_injeksi").val('Rp. ' + total);
        });

        $("#lama_angsuran_bulanan").change(function() {
            var hargaclean = $("#harga").val().replace(/[^\d]/g, '');
            var harga = parseInt(hargaclean);
            var l_a_b = parseInt($("#lama_angsuran_bulanan").val());
            var tinjekclean = $("#total_injeksi").val().replace(/[^\d]/g, '');
            var t_injek = parseInt(tinjekclean);
            var dpclean = $("#dp").val().replace(/[^\d]/g, '');
            var dp = parseInt(dpclean);
            var total = (harga - dp - t_injek) / l_a_b;
            var bagi = total / 1000;
            var dibulatkan = Math.floor(bagi);
            var hasilnya = (dibulatkan * 1000).toLocaleString('id-ID');
            $("#angsuran_bulanan").val(hasilnya);

        });
    });
</script> <!-- Menghitung otomatis -->
<script>
    $(function() {
        $('#dp, #harga, #injeksi').maskMoney({
            prefix: 'Rp. ',
            thousands: '.',
            decimal: ',',
            precision: 0
        });
    })
</script>