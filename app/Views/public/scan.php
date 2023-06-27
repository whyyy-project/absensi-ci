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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_URL(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_URL(); ?>assets/favicon.ico">

    <style>
        .bg-scan-image {
            background-image: url("<?= base_URL(); ?>images/scan_image.jpg");
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

        img.lazy {
            opacity: 0;
        }

        img.lazy.loaded {
            opacity: 1;
        }
    </style>

</head>

<body class="bg-gradient-success">

    <div class="container">
        <div class="absensi">
        </div>
    </div>

    <script>
        function refreshDivContent() {
            // Mendapatkan elemen div dengan kelas "absensi"
            var divElement = document.querySelector('.absensi');
            // Mengirim permintaan HTTP ke URL yang berisi data yang akan dimuat ulang
            fetch('<?= base_url() ?>hasil') // Ganti 'data-url' dengan URL yang sesuai
                .then(response => response.text())
                .then(data => {
                    // Mengganti konten elemen div dengan data yang baru
                    divElement.innerHTML = data;
                });

            // Menjalankan fungsi ini setiap detik
            setTimeout(refreshDivContent, 1000);
        }

        // Memulai pembaruan konten div setiap detik
        refreshDivContent();
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_URL(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_URL(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_URL(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_URL(); ?>assets/js/sb-admin-2.min.js"></script>
    <script src="<?= base_url() ?>assets/js/content.js"></script>

</body>

</html>