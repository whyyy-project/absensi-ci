

<?= $this->extend('guru/layouts/template') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>
    </div>
    <!-- end page heading -->

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Siswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">4000 </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Datang Hari ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1000 anak</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tidak Datang 
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">500 anak</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Persentase</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">33%</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Absensi Siswa</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Opsi :</div>
                            <a class="dropdown-item" href="#">Refresh</a>
                            <a class="dropdown-item" href="#">Download</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Masuk</th>
                                    <th>Pulang</th>
                                    <th>Keterangan</th>
                                    <th>Edith</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>No</th>
                                    <th>Nama</th>
                                    <th>Masuk</th>
                                    <th>Pulang</th>
                                    <th>Keterangan</th>
                                    <th>Edit</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <tr>
    <td>1</td>
    <td>Adi Sukmana</td>
    <td>06:45</td>
    <td>13:00</td>
    <td>H</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>2</td>
    <td>Budi Prasetyo</td>
    <td>08:30</td>
    <td>15:45</td>
    <td>I</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>3</td>
    <td>Citra Putri</td>
    <td>09:15</td>
    <td>16:30</td>
    <td>S</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>4</td>
    <td>Denny Gunawan</td>
    <td>10:00</td>
    <td>17:15</td>
    <td>H</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>5</td>
    <td>Eva Kusuma</td>
    <td>11:30</td>
    <td>18:45</td>
    <td>I</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>6</td>
    <td>Fajar Ramadhan</td>
    <td>13:15</td>
    <td>20:30</td>
    <td>S</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>7</td>
    <td>Gita Permata</td>
    <td>14:45</td>
    <td>22:00</td>
    <td>H</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>8</td>
    <td>Hendrianto</td>
    <td>15:30</td>
    <td>22:45</td>
    <td>I</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>9</td>
    <td>Indah Wijaya</td>
    <td>16:15</td>
    <td>23:30</td>
    <td>S</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>10</td>
    <td>Joko Santoso</td>
    <td>17:45</td>
    <td>01:00</td>
    <td>H</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>11</td>
    <td>Kartika Dewi</td>
    <td>18:30</td>
    <td>02:45</td>
    <td>I</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>12</td>
    <td>Luthfi Rahman</td>
    <td>19:15</td>
    <td>03:30</td>
    <td>S</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>13</td>
    <td>Maria Dewi</td>
    <td>20:45</td>
    <td>04:00</td>
    <td>H</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>14</td>
    <td>Nando Setiawan</td>
    <td>21:30</td>
    <td>05:45</td>
    <td>I</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>15</td>
    <td>Opik Maulana</td>
    <td>22:15</td>
    <td>06:30</td>
    <td>S</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>16</td>
    <td>Puspita Sari</td>
    <td>23:45</td>
    <td>07:00</td>
    <td>H</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>17</td>
    <td>Qori Ananda</td>
    <td>00:30</td>
    <td>08:45</td>
    <td>I</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>18</td>
    <td>Ratna Putri</td>
    <td>01:15</td>
    <td>09:30</td>
    <td>S</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>19</td>
    <td>Surya Wijaya</td>
    <td>02:45</td>
    <td>10:00</td>
    <td>H</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>20</td>
    <td>Tuti Mulyani</td>
    <td>03:30</td>
    <td>11:45</td>
    <td>I</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>

                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection() ?>