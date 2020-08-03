@extends('../../layouts.adminMaster')
@section('content')
<!--Page Body Start-->
<div class="page-body">

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Instansi
                        <small>Kelola Informasi Instansi</small>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Detail Instansi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends -->

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-dashboard">
                            <div class="media">
                                <img class="mr-3" src="assets/images/dashboard-icons/document.png"
                                    alt="Generic placeholder image">
                                <div class="media-body text-right">
                                    <h4 class="mt-0 counter font-primary">2569</h4>
                                    <span>JUMLAH USTADZ</span>
                                </div>
                            </div>
                            <div class="dashboard-chart-container">
                                <div id="line-chart-sparkline-dashboard1"
                                    class="flot-chart-placeholder line-chart-sparkline"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-dashboard">
                            <div class="media">
                                <img class="mr-3" src="assets/images/dashboard-icons/document.png"
                                    alt="Generic placeholder image">
                                <div class="media-body text-right">
                                    <h4 class="mt-0 counter font-primary">2569</h4>
                                    <span>JUMLAH SANTRI</span>
                                </div>
                            </div>
                            <div class="dashboard-chart-container">
                                <div id="line-chart-sparkline-dashboard1"
                                    class="flot-chart-placeholder line-chart-sparkline"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Informasi Instansi</h5>
                    </div>
                    <div class="card-body">
                        <form action="" class="form theme-form">
                            <div class="form-group">
                                <label for="adminInstansi">Admin Instansi</label>
                                <select class="form-control" id="adminInstansi">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="namaInstansi">Nama Instansi</label>
                                <input required type="text" class="form-control" id="namaInstansi"
                                    placeholder="Nama Instansi">
                            </div>
                            <div class="form-group">
                                <label for="kodeInstansi">Kode Instansi</label>
                                <input required type="text" class="form-control" id="kodeInstansi"
                                    placeholder="Kode Instansi">
                                <small id="emailHelp" class="form-text text-muted">Ubah kode instansi hanya jika
                                    diperlukan.</small>
                            </div>
                            <div class="form-group">
                                <label for="kepalaInstansi">Kepala Instansi</label>
                                <input required type="text" class="form-control" id="kepalaInstansi"
                                    placeholder="Kepala Instansi">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input required type="text" class="form-control" id="alamat" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input required type="text" class="form-control" id="telepon" placeholder="Telepon">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input is-invalid" type="checkbox" value=""
                                        id="invalidCheck3" required>
                                    <label class="form-checkl" for="invalidCheck3">
                                        Verifikasi
                                    </label>
                                    <div class="invalid-feedback">
                                        Belum diverifikasi
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea id="keterangan" class="form-control" rows="5"
                                    placeholder="Keterangan"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends -->
</div>
<!--Page Body Ends-->
@endsection