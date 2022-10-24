<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Approve;
use App\Models\Kendaraan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function approveuser(){
    //     $datakendaraan = Kendaraan::all();
    //     $datapaket  =   Paket::all();
    //     return view('user/approvedata',compact('datakendaraan'));
    // }

    // public function insertapprove(Request $request){
    //     //dd($request->all()); /* check menggunakan Array */

    //     $this->validate($request,[
    //             'nama'          =>  'required|min:3|max:24',
    //             'jeniskelamin'  =>  'required',
    //             'notelpon'      =>  'required|min:9|max:13',
    //             'lokasi'        =>  'required',
    //             'id_kendaraan'  =>  'required',
    //             'plat_nomor'    =>  'required',
    //             'paket_kendaraan'   => 'required',
    //             'kartu_e'       =>  'required',
    //             'f_ktp'           =>  'required',
    //             'f_sim'           =>  'required',
    //             'f_stnk'          =>  'required',
    //             'no_rekening'   =>  'required',
    //             'bukti_transaksi'   =>  'required',

    //         ]);

    //     $data = Approve::create([
    //         'nama'              =>  $request->nama,
    //         'jeniskelamin'      =>  $request->jeniskelamin,
    //         'notelpon'          =>  $request->notelpon,
    //         'lokasi'            =>  $request->lokasi,
    //         'id_kendaraan'      =>  $request->id_kendaraan,
    //         'plat_nomor'        =>  $request->plat_nomor,
    //         'paket_kendaraan'   =>  $request->paket_kendaraan,
    //         'kartu-e'           =>  $request->kartu_e,
    //         'f_ktp'             =>  $request->f_ktp,
    //         'F_sim'             =>  $request->F_sim,
    //         'f_stnk'            =>  $request->f_stnk,
    //         'no_rekening'       =>  $request->no_rekening,
    //         'bukti_transaksi'   =>  $request->bukti_transaksi,

    //     ]);

    //     if($request->hasFile('f_ktp')){
    //         $request->file('f_ktp')->move('fotoktp/', $request->file('f_ktp')->getClientOriginalName()); // Taroh DI Folder [fotoadmin/]
    //         $data->f_ktp = $request->file('f_ktp')->getClientOriginalName(); // Ambil namanya aja
    //         $data->save();
    //     }

    //     if($request->hasFile('f_sim')){
    //         $request->file('f_sim')->move('fotosim/', $request->file('f_sim')->getClientOriginalName()); // Taroh DI Folder [fotoadmin/]
    //         $data->f_sim = $request->file('f_sim')->getClientOriginalName(); // Ambil namanya aja
    //         $data->save();
    //     }

    //     if($request->hasFile('f_stnk')){
    //         $request->file('f_stnk')->move('fotostnk/', $request->file('f_stnk')->getClientOriginalName()); // Taroh DI Folder [fotoadmin/]
    //         $data->f_stnk = $request->file('f_stnk')->getClientOriginalName(); // Ambil namanya aja
    //         $data->save();
    //     }

    //     if($request->hasFile('foto')){
    //         $request->file('foto')->move('fotoadmin/', $request->file('foto')->getClientOriginalName()); // Taroh DI Folder [fotoadmin/]
    //         $data->foto = $request->file('foto')->getClientOriginalName(); // Ambil namanya aja
    //         $data->save();
    //     }


    //     return redirect()->route('admin')->with(compact('datakendaraan'))->with('success','Data Berhasil Di Tambahkan');
    // }






     public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Approve  $approve
     * @return \Illuminate\Http\Response
     */
    public function show(Approve $approve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Approve  $approve
     * @return \Illuminate\Http\Response
     */
    public function edit(Approve $approve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Approve  $approve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Approve $approve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Approve  $approve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Approve $approve)
    {
        //
    }
}
