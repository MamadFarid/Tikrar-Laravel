@extends('../../layouts.adminMaster')
@section('content')
<!--Page Body Start-->
<div class="page-body">

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Manajemen Santri
                        <small>Daftar Santri</small>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Daftar Santri</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- Container-fluid Ends -->

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="alert alert-info" role="alert">
                    <b>Informasi Penting:</b><br />
                    Santri yang didaftarkan secara otomatis diberikan username dan password oleh sistem.<br />
                    Password dibuat sama dengan username dan dapat diubah sewaktu-waktu.
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Informasi Santri</h5>
                    </div>

                    <div class="card-body">
                        <form action="" class="form theme-form">
                            <div class="form-group">
                                <label for="adminInstansi">Admin Instansi</label>
                                <select class="form-control" id="adminInstansi">
                                    <option selected disabled>-- Pilih Instansi --</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama </label>
                                <input required type="text" class="form-control" id="nama" placeholder="Nama ">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email </label>
                                <input required type="email" class="form-control" id="Email" placeholder="Email ">
                                <small id="emailHelp" class="form-text text-muted">Optional</small>
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select class="form-control" id="jk">
                                    <option selected disabled>-- Pilih --</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tempatLahir">Tempat Lahir</label>
                                <input required type="text" class="form-control" id="tempatLahir"
                                    placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <input required type="date" class="form-control" id="tanggalLahir"
                                    placeholder="Tanggal Lahir">
                                <small id="emailHelp" class="form-text text-muted">Format: bulan/tanggal/tahun.</small>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea id="alamat" class="form-control" rows="5" placeholder="Alamat"></textarea>
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