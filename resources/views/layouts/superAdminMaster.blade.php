<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
    content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
    content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <title>Universal - Premium Admin Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">
    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.css') }}">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify.css') }}">
    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flag-icon.css') }}">
    <!-- Owl css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owlcarousel.css') }}">
    <!--JSGrid css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}" />
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>
    <!-- Loader starts -->
    <div class="loader-wrapper">
        <div class="loader bg-white">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- Loader ends -->

    <!--page-wrapper Start-->
    <div class="page-wrapper">

        <!--Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-left">
                <div class="logo-wrapper">
                    <a href="index.html">
                        <img src="assets/images/logo-light.png" class="image-dark" alt="" />
                        <img src="assets/images/logo-light-dark-layout.png" class="image-light" alt="" />
                    </a>
                </div>
            </div>
            <div class="main-header-right row">
                <div class="mobile-sidebar">
                    <div class="media-body text-right switch-sm">
                        <label class="switch">
                            <input type="checkbox" id="sidebar-toggle" checked>
                            <span class="switch-state"></span>
                        </label>
                    </div>
                </div>
                <div class="nav-right col">
                    <ul class="nav-menus">
                        <li class="onhover-dropdown">
                            <div class="media  align-items-center">
                                <img class="align-self-center pull-right mr-2" src="assets/images/dashboard/user.png"
                                alt="header-user" />
                                <div class="media-body">
                                    <h6 class="m-0 txt-dark f-16">
                                        My Account
                                        <i class="fa fa-angle-down pull-right ml-2"></i>
                                    </h6>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20">
                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>
                                        Edit Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle">
                        <i class="icon-more"></i>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Header Ends-->

        <!--Page Body wrapper Start-->
        <div class="page-body-wrapper">

            <!--Page Sidebar Start-->
            <div class="page-sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div>
                        <img class="img-50 rounded-circle" src="assets/images/user/1.jpg" alt="#">
                    </div>
                    <h6 class="mt-3 f-12">Johan Deo</h6>
                </div>
                <ul class="sidebar-menu">
                    <li class="active">
                        <div class="sidebar-title">General</div>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Instansi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Manajemen Ustadz</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Manajemen Santri</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Manajemen Kelas</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Monitoring Hafalan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Akses Token</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>System Log</span>
                        </a>
                    </li>
                    <li>
                        <div class="sidebar-title">PENGANTURAN</div>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Pengaturan Akun</span>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-widget text-center">
                    <div class="sidebar-widget-top">
                        <h6 class="mb-2 fs-14">Need Help</h6>
                        <i class="icon-bell"></i>
                    </div>
                    <div class="sidebar-widget-bottom p-20 m-20">
                        <p>+1 234 567 899
                            <br>help@pixelstrap.com
                            <br><a href="#">Visit FAQ</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--Page Sidebar Ends-->


            @yield('content')    


        </div>
        <!--Page Body wrapper Ends-->
    </div>

    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('instansi.index') }}",
                columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kode_instansi', name: 'kode_instansi'},
                {data: 'nama_instansi', name: 'nama_instansi'},
                {data: 'alamat_instansi', name: 'alamat_instansi'},
                {data: 'kepala_instansi', name: 'kepala_instansi'},
                {data: 'telepon_instansi', name: 'telepon_instansi'},
                {data: 'keterangan', name: 'keterangan'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
            $('#createNewAnggota').click(function () {
                $('#saveBtn').val("create");
                $('#id_ins').val('');
                $('#anggotaForm').trigger("reset");
                $('#modelHeading').html("Tambah");
                $('#ajaxModel').modal('show');
            });
            $('body').on('click', '.edits', function () {
                var id_ins = $(this).data('id');
                $.get("{{ route('instansi.index') }}" +'/' + id_ins +'/edit', function (data) {
                  $('#modelHeading').html("Edit Anggota");
                  $('#saveBtn').val("edit-user");
                  $('#ajaxModel').modal('show');
                  $('#id_ins').val(data.id);
                  $('#kode_instansi').val(data.kode_instansi);
                  $('#nama_instansi').val(data.nama_instansi);
                  $('#alamat_instansi').val(data.alamat_instansi);
                  $('#kepala_instansi').val(data.kepala_instansi);
                  $('#telepon_instansi').val(data.telepon_instansi);
                  $('#keterangan').val(data.keterangan);
              })
            });
            $('#saveBtn').click(function (e) {
                e.preventDefault();
                $(this).html('Memproses..');

                $.ajax({
                  data: $('#anggotaForm').serialize(),
                  url: "{{ route('instansi.store') }}",
                  type: "POST",
                  dataType: 'json',
                  success: function (data) {
                    $('#anggotaForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
            });
            $('body').on('click', '.deletes', function () {
                var anggota_id = $(this).data("id");
                confirm("Are You sure want to delete !");
                $.ajax({
                  type: "DELETE",
                  url: "{{ route('instansi.store') }}"+'/'+anggota_id,
                  success: function (data) {
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
            });
        });
    </script>

    <!--page-wrapper Ends-->

    <!-- latest jquery-->
    <!-- <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script> -->
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.js') }}"></script>
    <!-- google Chart JS-->
    <script src="{{ asset('assets/js/chart/google-chart-loader.js') }}"></script>
    <script src="{{ asset('assets/js/chart/google-chart.js') }}"></script>
    <!-- owlcarousel js-->
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    <!-- Data Tables -->
    <script src="{{ asset('assets/js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/datatable.custom.js') }}"></script>
    <!-- Theme js-->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/dashboard-default.js') }}"></script> -->
    <!-- Counter js-->
    <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>

</body>

</html>