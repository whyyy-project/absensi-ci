<?php
if (isset($_POST['submit'])) {
    // Ambil nilai dari input form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $noTelepon = $_POST['no_telepon'];
    $pesan = $_POST['pesan'];

    // Konten email
    $subject = "Formulir Kontak";
    $message = "Nama: $nama\n";
    $message .= "Email: $email\n";
    $message .= "No Telepon: $noTelepon\n";
    $message .= "Pesan: $pesan\n";

    // Email tujuan
    $to = "maalabrorsukosewu00@gmail.com";

    // Header email
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Kirim email
    mail($to, $subject, $message, $headers);

    // Redirect ke halaman terima kasih
    header("terimakasih.php");
    exit();
}
?>
