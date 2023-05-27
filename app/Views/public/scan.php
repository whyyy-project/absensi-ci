<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Scan Absensi</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_URL(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_URL(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_URL(); ?>assets/favicon.ico">

    <style>
    .bg-scan-image {
        background-image: url("<?= base_URL(); ?>images/scan_image.jpg");
        /* jika scan gagal gambar jadi
            background-image: url("<?= base_URL(); ?>
            images/scan_image2.jpg"); */

        /* jika scan berhasil gambar jadi 
            background-image: url("<?= base_URL(); ?>
            images/scan_image3.jpg"); */

        background-position: center;
        background-size: cover;
    }

    .bg-scan2-image {
        background-image: url("<?= base_URL(); ?>images/scan_image2.jpg");
        background-position: center;
        background-size: cover;
    }

    .bg-scan3-image {
        background-image: url("<?= base_URL(); ?>images/scan_image3.jpg");
        background-position: center;
        background-size: cover;
    }

    .bg-scan4-image {
        background-image: url("<?= base_URL(); ?>images/logo-scan.png");
        background-position: center;
        background-size: cover;
    }
    </style>

</head>

<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- content card -->
                        <div class="row text-center">
                            <div class="col-lg-6 d-none d-lg-block bg-scan2-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">SCAN ABSENSI</h1>
                                        <h2>
                                            <?= $jam ?>
                                        </h2>
                                    </div>
                                    <!-- view idcard -->
                                    <div class="card bg-gradient-primary text-white shadow">
                                        <div class="card-body">
                                            <h3 class="mt-2">
                                                john Doe
                                            </h3>
                                            <hr>
                                            <h4>
                                                Pulang
                                            </h4>
                                            <p>
                                                Selamat Jalan
                                            </p>
                                            <p>
                                                Masuk 07:34, Pulang 13:34
                                            </p>
                                            <p>
                                                21-07-2023
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end view idcard -->

                                    <hr>
                                    <a href="<?= base_URL(); ?>" class="btn btn-link">Back to Dashboard</a>
                                </div>
                            </div>
                        </div>
                        <!-- end content card -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_URL(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_URL(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_URL(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_URL(); ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>