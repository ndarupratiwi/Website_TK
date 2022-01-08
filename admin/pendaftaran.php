<?php include '../template/header-admin.php'; ?>

<!-- Pendaftaran  -->
<link rel="stylesheet" href="admin.css">
<div class="container-fluid" id="pendaftaran" name="pendaftaran">
    <div class="pendaftaran">
        <h1>Pendaftaran</h1>

        <br>

        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>                          
                                <input class="btn btn-primary ml-5" type="button" value="Input Data">                          
                        </div>
                    </form>
                    
        <br>
        <br>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelompok</th>
                        <th scope="col">Ttl</th>
                        <th scope="col">Jenkel</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Ayah</th>
                        <th scope="col">Pekerjaan Ayah</th>
                        <th scope="col">Ibu</th>
                        <th scope="col">Pekerjaan Ibu</th>
                        <th scope="col">Anak ke</th>
                        <th scope="col">Hub. keluarga</th>
                        <th scope="col">Pend. Terakhir Ayah</th>
                        <th scope="col">Pend. Terakhir Ibu</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telp</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Putra Adi</td>
                        <td>A</td>
                        <td>Jember, 1 Oktober 2017</td>
                        <td>Laki-Laki</td>
                        <td>Islam</td>
                        <td>Maskuri</td>
                        <td>Petani</td>
                        <td>Wijayanti</td>
                        <td>Petani</td>
                        <td>1</td>
                        <td>Anak Kandung</td>
                        <td>MAN</td>
                        <td>SMK</td>
                        <td>Sumbersari, Jember</td>
                        <td>put@gmail.com</td>
                        <td>081222333444555</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mahmud Eid</td>
                        <td>B</td>
                        <td>Bondowoso, 12 Maret 2017</td>
                        <td>Laki-Laki</td>
                        <td>Islam</td>
                        <td>Abdullah Eko</td>
                        <td>Wiraswasta</td>
                        <td>Rahma</td>
                        <td>Guru</td>
                        <td>3</td>
                        <td>Anak Kandung</td>
                        <td>SMA</td>
                        <td>SMK</td>
                        <td>Wringin, Bondowoso</td>
                        <td>eid12@gmail.com</td>
                        <td>081555444333222</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

