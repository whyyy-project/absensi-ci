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