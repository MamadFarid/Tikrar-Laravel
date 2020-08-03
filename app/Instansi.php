<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $table = "instansi";
    protected $fillable = ['user_id', 'kode_instansi', 'nama_instansi', 'alamat_instansi', 'kepala_instansi', 'telepon_instansi', 'keterangan'];
}
