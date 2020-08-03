<!DOCTYPE html>
<html>
<head>
  <title>Laravel CRUD Ajax DataTable</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>

  <div class="container">
    <h1 style="margin-botton: 20px;">Laravel CRUD Ajax DataTable</h1>
    <a class="btn btn-success" href="javascript:void(0)" id="createNewAnggota" style="padding-botton: 20px;"> Tambah Anggota</a>
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
                                <input type="hidden" name="user_id" id="user_id">

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
   </div>
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
    $('#user_id').val('');
    $('#anggotaForm').trigger("reset");
    $('#modelHeading').html("Tambah");
    $('#ajaxModel').modal('show');
  });
  $('body').on('click', '.edits', function () {
    var user_id = $(this).data('id');
    $.get("{{ route('instansi.index') }}" +'/' + user_id +'/edit', function (data) {
      $('#modelHeading').html("Edit Anggota");
      $('#saveBtn').val("edit-user");
      $('#ajaxModel').modal('show');
      $('#user_id').val(data.id);
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
</body>
</html>