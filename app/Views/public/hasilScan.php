<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">SCAN ABSENSI</h1>
    <h3>
        <?= date('H:i:s') ?>
    </h3>
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
            Masuk 06:34, Pulang 13:34
        </p>
        <p>
            21-07-2023
        </p>
    </div>
</div>
<?php foreach ($absensi as $ab) : ?>
    <?= $ab['nama'] ?>
<?php endforeach; ?>
<!-- end view idcard -->