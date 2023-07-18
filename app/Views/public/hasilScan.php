<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">SCAN ABSENSI</h1>
    <h3>
        <?= date('H:i:s') ?>
    </h3>
</div>
<!-- view idcard -->
<?php foreach ($absensi as $ab) : ?>
    <?php
    $masuk = date("His", strtotime($ab['masuk']));
    if ($masuk > 070000) {
        $bg = "danger";
    } else {
        $bg = "primary";
    }
    ?>
    <div class="card bg-gradient-<?= $bg ?> text-white shadow">
        <div class="card-body">
            <h3 class="mt-2">
                <?= $ab['nama'] ?>
            </h3>
            <hr>
            <h4>
                <?= $ab['status_absen'] ?>
            </h4>
            <p>
                <?= $ab['keterangan'] ?>
            </p>
            <p>
                Masuk <?= $ab['masuk'] ?>, Pulang <?= $ab['pulang'] ?>
            </p>
            <p>
                <?= $ab['tanggal'] ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>

<!-- end view idcard -->