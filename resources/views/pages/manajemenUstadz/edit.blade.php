@extends('../../layouts.adminMaster')
@section('content')
<!--Page Body Start-->
<div class="page-body">

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Manajemen Ustadz
                        <small>Profil Ustadz</small>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Detail Ustadz</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends -->

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <img src="assets/images/user-card/1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="card-profile">
                        <img src="assets/images/avtar/3.jpg" class="rounded-circle" alt="">
                    </div>
                    <div class="text-center profile-details">
                        <h4 class="m-b-15 m-t-5">Mark Jecno</h4>
                        <h6 class="m-t-15">Ustadz</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Informasi Ustadz</h5>
                    </div>
                    <div class="card-body">
                        <form action="" class="form theme-form">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input required type="text" class="form-control" id="username"
                                    placeholder="Nama Instansi">
                                <small id="emailHelp" class="form-text text-muted">Username tidak bisa dirubah</small>
                            </div>
                            <div class="form-group">
                                <label for="namaLengkap">Nama Lengkap</label>
                                <input required type="text" class="form-control" id="namaLengkap"
                                    placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input required type="text" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select class="form-control" id="jk">
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
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
                                <label for="fotoProfil">Ganti Foto Profil</label>
                                <input type="file" class="form-control-file" id="fotoProfil">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea id="alamat" class="form-control" rows="5" placeholder="Alamat"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
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