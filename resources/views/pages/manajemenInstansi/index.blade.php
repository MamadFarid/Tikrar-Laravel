@extends('layouts.superAdminMaster')
@section('content')
<!--Page Body Start-->
<div class="page-body">

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Manajemen Instansi
                        <small>Kelola Informasi Instansi</small>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Instansi</li>
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
                                    <span>JUMLAH INSTANSI</span>
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

            <div class="container">
                <h1 style="margin-botton: 20px;">Daftar Instansi</h1>
                <a class="btn btn-success" href="javascript:void(0)" id="createNewAnggota" style="padding-botton: 20px;"> Tambah</a>
                <br />
                <br />
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode Instansi</th>
                            <th>Nama Instansi</th>
                            <th>Alamat Instansi</th>
                            <th>Kepala Instansi</th>
                            <th>Telepon Instansi</th>
                            <th>Keterangan</th>                          
                            <th>Atur</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="ajaxModel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modelHeading"></h4>
                        </div>
                        <div class="modal-body">
                            <form id="anggotaForm" name="anggotaForm" class="form-horizontal">
                                <input type="hidden" name="id_ins" id="id_ins">

                                <div class="form-group">
                                    <label for="nama" class="col-sm-12 control-label">Kode Instansi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="kode_instansi" name="kode_instansi" placeholder="" value="" maxlength="50" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama" class="col-sm-12 control-label">Nama Instansi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" placeholder="" value="" maxlength="50" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama" class="col-sm-12 control-label">Alamat Instansi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="alamat_instansi" name="alamat_instansi" placeholder="" value="" maxlength="50" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama" class="col-sm-12 control-label">Kepala Instansi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="kepala_instansi" name="kepala_instansi" placeholder="" value="" maxlength="50" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama" class="col-sm-12 control-label">Telepon Instansi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="telepon_instansi" name="telepon_instansi" placeholder="" value="" maxlength="50" required="">
                                    </div>
                                </div>

                                <div class="col-sm-offset-2 col-sm-12">
                                    <button type="submit" class="btn btn-primary" id="saveBtn" value="create" style="width: 100%">Simpan
                                    </button>
                                </div>
                         </form>
                     </div>
                 </div>
                 <!--Zero Configuration  Ends -->
             </div>
         </div>
         <!-- Container-fluid Ends -->
     </div>
     <!--Page Body Ends-->
     @endsection