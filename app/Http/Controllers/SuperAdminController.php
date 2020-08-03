<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instansi;
use DataTables;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
    	// return view('pages.manajemenInstansi.index');
    	if ($request->ajax()) {
    		$data = Instansi::latest()->get();
    		return Datatables::of($data)
    		->addIndexColumn()
    		->addColumn('action', function($row){

    			$btn = '<div class="col-sm-12"><div class="row"><div class="col-sm-5"><a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm edits">Edit</a></div>';

    			$btn = $btn.' <div class="col-sm-7"><a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deletes">Delete</a></div></div></div>';

    			return $btn;
    		})
    		->rawColumns(['action'])
    		->make(true);
    	}
    	return view('superAdmin.manajemenInstansi.index');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request){
    	Instansi::updateOrCreate(['id' => $request->id_ins],    		
    		[
    			'kode_instansi' => $request->kode_instansi,
    			'user_id' => '1',
    			'nama_instansi' => $request->nama_instansi,
    			'alamat_instansi' => $request->alamat_instansi,
    			'kepala_instansi' => $request->kepala_instansi,
    			'telepon_instansi' => $request->telepon_instansi,
    			'keterangan' => 'Keterangan',
    		]);        

    	return response()->json(['success'=>'Instansi Disimpan.']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
    	$anggota = Instansi::find($id);
    	return response()->json($anggota);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
    	Instansi::find($id)->delete();

    	return response()->json(['success'=>'Anggota Dihapus.']);
    }
}
