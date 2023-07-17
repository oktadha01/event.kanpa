<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets_adm/img/logo/logo1.png">
    <title>
        Halaman Login
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets_adm/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets_adm/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url(); ?>assets_adm/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="<?= base_url(); ?>assets_adm/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>
<?php
if ($this->session->flashdata('error')) {
    echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
}
?>

<body class="">
    <main class="main-content  mt-0">
        <section class="min-vh-100 mb-8">
            <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
                style="background-image: url('<?= base_url('upload'); ?>/header-selamat-datang.png"');">
                <!-- <img class="img-fluid mt-5" src="<?= base_url('upload'); ?>/header-selamat-datang.png" alt="" style="border-radius: 9px;"> -->
                <!-- <span class="mask bg-gradient-info opacity-5"></span> -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 text-center mx-auto">
                            <h2 class="text-white mb-2 mt-5"></h2>
                            <br><br><br>
                            <p class="text-lead text-white"></p>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                        <div class="card z-index-0">
                            <div class="card-header text-center pt-4">
                                <img src="<?= base_url(); ?>assets_adm/img/logo/logo1.png" alt="Logo" width="50" height="50">
                                <h5>Login</h5>
                            </div>
                            <div class="card">
                                <div class="card-body login-card-body">
                                    <form action="<?= site_url('Auth/login') ?>" method="post">
                                        <!-- Alert -->
                                        <?php
                                        if (validation_errors() || $this->session->flashdata('result_login')) {
                                        ?>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <span class="alert-icon"><i class="fa fa-warning"></i></span>
                                            <strong>Warning!</strong>
                                            <?php echo validation_errors(); ?>
                                            <?php echo $this->session->flashdata('result_login'); ?>
                                            <?php echo $this->session->flashdata('Habis'); ?>
                                        </div>
                                        <?php } ?>

                                        <?php
                                        $data = $this->session->flashdata('sukses');
                                        if ($data != "") { ?>
                                        <div class="alert alert-success"><strong>Sukses! </strong> <?= $data; ?></div>
                                        <?php } ?>
                                        <!-- akhir alert -->
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="username" id="username"
                                                required="" autocomplete="off" placeholder="Enter username Anda...">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Password"
                                                aria-label="Password" name="password" id="password"
                                                aria-describedby="email-addon">
                                        </div>
                                        <div class="row">
                                            <div class="form-check form-check-info text-left">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="customCheck">
                                                <label class="form-check-label" type="checkbox" for="flexCheckDefault">
                                                    Tampilkan
                                                    Password </label>
                                            </div>
                                            <!-- /.col -->
                                            <div class="text-center">
                                                <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Sign
                                                    in</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- awal footer -->
        <style>
        .title-h4 {
            color: orange;
            font-family: ui-serif;
            font-weight: bold;
        }

        .text-h6 {
            color: white;
            font-family: sans-serif;
        }

        .icon-info-kontak {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            padding: 5px;
            font-size: 28px;
            color: white;
            border: 2px solid white;
            border-radius: 10px;
        }
        </style>
        <footer class="footer py-5 mt-1" style="background: #033b6c;">
            <div class="container">
                <div>
                    <h4 class="font-weight-bolder text-warning text-gradient">Kanzu Permai Abadi</h4>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 ">
                        <h4 class="title-h4">Jam Kerja</h4>
                        <h6 class="text-h6">Senin - Minggu</h6>
                        <h6 class="text-h6">08AM - 16PM</h6>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <h4 class="title-h4">Kantor Penjualan</h4>
                        <h6 class="text-h6">Jl. Pattimura Raya, Komplek Masjid Baitut Taqwa, Mapagan, Lerep, Kec.
                            Ungaran
                            Bar.,
                            Kabupaten Semarang, Jawa Tengah 50518</h6>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <h4 class="title-h4">Info Kontak</h4>
                        <h6 class="text-h6"><i class="fa-solid fa fa-phone"></i> (024) 7590 1139</h6>
                        <h6 class="text-h6"><i class="fa-brands fab fa-whatsapp"></i> 0823-3350-7931</h6>
                        <h6 class="text-h6"><i class="fa-regular fa fa-envelope"></i> Kanzugroupindonesia@gamail.com
                        </h6>
                        <hr class="horizontal light">
                        <div class="mb-2" style="text-align-last: justify;">
                            <a href="" class="icon-info-kontak"><i class="fa-brands fab fa-whatsapp"></i></a>
                            <a href="" class="icon-info-kontak"><i class="fa-brands fab fa-instagram"></i></a>
                            <a href="" class="icon-info-kontak"><i class="fa-brands fab fa-facebook"></i></a>
                            <a href="" class="icon-info-kontak"><i class="fa-regular fab fa-tiktok"></i></a>
                            <a href="" class="icon-info-kontak"><i class="fa-brands fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 mx-auto text-center mt-0">
                        <p class="mb-0 text-white">
                            &copy; <script>
                            document.write(new Date().getFullYear())
                            </script> PT KANPA
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- akhir footer -->
    </main>
    <!--   Core JS Files   -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
    $(document).ready(function() {
        $(' #customCheck').click(function() { if ($(this).is(':checked')) { $('#password').attr('type', 'text' ); }
                else { $('#password').attr('type', 'password' ); } }); }); </script>

                <script src="<?= base_url('assets_adm/'); ?>js/core/popper.min.js"></script>
                <script src="<?= base_url('assets_adm/'); ?>js/core/bootstrap.min.js"></script>
                <script src="<?= base_url('assets_adm/'); ?>js/plugins/perfect-scrollbar.min.js"></script>
                <script src="<?= base_url('assets_adm/'); ?>js/plugins/smooth-scrollbar.min.js"></script>
                <script async defer src="https://buttons.github.io/buttons.js"></script>
                <script src="<?= base_url('assets_adm/'); ?>/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>