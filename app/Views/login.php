<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jul 2021 01:34:26 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | LKPJKU Kabupaten Kulon Progo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('theme/xmee'); ?>/demo/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('theme/xmee'); ?>/demo/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?= base_url('theme/xmee'); ?>/demo/css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="<?= base_url('theme/xmee'); ?>/demo/font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('theme/xmee'); ?>/demo/style.css">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="fxt-template-animation fxt-template-layout9" data-bg-image="<?= base_url('theme/xmee'); ?>/demo/img/figure/bg9-l.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-3">
                    <div class="fxt-header">
                        <!-- <a href="<?= base_url(); ?>" class="fxt-logo text-center"> -->
                        <a href="<?= base_url(); ?>" class="text-center">
                            <h1 style="font-weight: bold; font-size:50pt; color:aliceblue;">SIGAP</h1>
                            <h1 style="font-weight: bold; font-size:50pt; color:aliceblue;">REKOM</h1>
                            <!-- <img src="<?= base_url('theme/xmee'); ?>/demo/img/logo-9.png" alt="Logo"> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="fxt-content">
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-info" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <h2>Login LKPJ Pemerintah Kabupaten Kulon Progo</h2>
                        <div class="fxt-form">
                            <form action="<?= base_url('dashboard'); ?>" method="post">
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="********">
                                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                                        <button type="submit" class="fxt-btn-fill">Masuk</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="<?= base_url('theme/xmee'); ?>/demo/js/jquery-3.5.0.min.js"></script>
    <!-- Popper js -->
    <script src="<?= base_url('theme/xmee'); ?>/demo/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url('theme/xmee'); ?>/demo/js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="<?= base_url('theme/xmee'); ?>/demo/js/imagesloaded.pkgd.min.js"></script>
    <!-- Validator js -->
    <script src="<?= base_url('theme/xmee'); ?>/demo/js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="<?= base_url('theme/xmee'); ?>/demo/js/main.js"></script>

</body>


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jul 2021 01:34:32 GMT -->

</html>