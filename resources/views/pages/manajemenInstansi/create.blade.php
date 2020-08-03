@extends('../../layouts.adminMaster')
@section('content')
<!--Page Body Start-->
<div class="page-body">

<!-- Container-fluid starts -->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Manajemen Instansi
                    <small>Daftar Instansi</small>
                </h3>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item active">Daftar Instansi</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends -->

<!-- Container-fluid starts -->
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Informasi Instansi</h5>
                </div>
                <div class="card-body">
                    <form action="" class="form theme-form">
                        <div class="form-group">
                            <label for="namaInstansi">Nama Instansi</label>
                            <input required type="text" class="form-control" id="namaInstansi" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input required type="text" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="namaPengurus">Nama Pengurus</label>
                            <input required type="text" class="form-control" id="namaPengurus" placeholder="Nama Pengurus">
                        </div>
                        <div class="form-group">
                            <label for="EmailPengurus">Email Pengurus</label>
                            <input required type="email" class="form-control" id="EmailPengurus" placeholder="Email Pengurus">
                        </div>
                        <div class="form-group">
                            <label for="Password Pengurus">Password Pengurus</label>
                            <input required type="password" class="form-control" id="Password Pengurus" placeholder="Password Pengurus">
                            <small id="emailHelp" class="form-text text-muted">Beri nilai default password: 123456</small>
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