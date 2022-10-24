<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Paket;
use App\Models\Lokasi;
use App\Models\Approve;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

date_default_timezone_set('Asia/Jakarta');

class UserController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function approveuser(){
        $datakendaraan = Kendaraan::all();
        $datalokasi = Lokasi::all();

        $paket_masuk   = Approve::join('pakets', 'pakets.id', '=', 'approves.id_paket')
                        ->select('approves.*', 'pakets.paket_kendaraan', 'pakets.harga')
                        ->get();

        $datapaket = Paket::all();

        return view('user/approvedata',compact('datakendaraan','datapaket','datalokasi'));
    }

    public function insertapprove(Request $request){

        $harga = Paket::findOrFail($request->id_paket)->harga;

        $this->validate($request,[
                'id_lokasi'         =>  'required',
                'id_kendaraan'      =>  'required',
                'plat_nomor'        =>  'required',
                'id_paket'          =>  'required',
                'harga'             =>  'required',
                'kartu_e'           =>  'required',
                'f_ktp'             =>  'required',
                'f_sim'             =>  'required',
                'f_stnk'            =>  'required',
                'no_rekening'       =>  'required',
                'bukti_transaksi'   =>  'required',
            ]);
        $data = Approve::create([
            'nama'              =>  Auth::user()->{'nama'},
            'jeniskelamin'      =>  Auth::user()->{'jeniskelamin'},
            'notelpon'          =>  Auth::user()->{'notelpon'},
            'email'             =>  Auth::user()->{'email'},
            'id_lokasi'         =>  $request->id_lokasi,
            'id_kendaraan'      =>  $request->id_kendaraan,
            'plat_nomor'        =>  $request->plat_nomor,
            'id_paket'          =>  $request->id_paket,
            'harga'             =>  $harga,
            'kartu_e'           =>  $request->kartu_e,
            'f_ktp'             =>  $request->f_ktp,
            'F_sim'             =>  $request->F_sim,
            'f_stnk'            =>  $request->f_stnk,
            'no_rekening'       =>  $request->no_rekening,
            'bukti_transaksi'   =>  $request->bukti_transaksi,
        ]);

        if($request->hasFile('f_ktp')){
            $request->file('f_ktp')->move('fotoktp/', $request->file('f_ktp')->getClientOriginalName()); // Taroh DI Folder [fotoadmin/]
            $data->f_ktp = $request->file('f_ktp')->getClientOriginalName(); // Ambil namanya aja
            $data->save();
        }
        if($request->hasFile('f_sim')){
            $request->file('f_sim')->move('fotosim/', $request->file('f_sim')->getClientOriginalName()); // Taroh DI Folder [fotoadmin/]
            $data->f_sim = $request->file('f_sim')->getClientOriginalName(); // Ambil namanya aja
            $data->save();
        }
        if($request->hasFile('f_stnk')){
            $request->file('f_stnk')->move('fotostnk/', $request->file('f_stnk')->getClientOriginalName()); // Taroh DI Folder [fotoadmin/]
            $data->f_stnk = $request->file('f_stnk')->getClientOriginalName(); // Ambil namanya aja
            $data->save();
        }
        if($request->hasFile('bukti_transaksi')){
            $request->file('bukti_transaksi')->move('fotobuktitransaksi/', $request->file('bukti_transaksi')->getClientOriginalName()); // Taroh DI Folder [fotoadmin/]
            $data->bukti_transaksi = $request->file('bukti_transaksi')->getClientOriginalName(); // Ambil namanya aja
            $data->save();
        }

        // dd($data);
        return redirect()->route('listapprove')->with('success', 'Data Berhasil di Tambahkan');
    }

    public function ajax(Request $request)
    {
        $id_paket['id_paket'] = $request->id_paket;
        $ajax_paket            = Paket::where('id', $id_paket)->get();

        return view('user.ajax', compact('ajax_paket'));
    }

    public function terima(Request $request, $id)
    {
        $data = Approve::find($id);

        $data->nama = $request->nama;
        $data->jeniskelamin = $request->jeniskelamin;
        $data->notelpon = $request->notelpon;
        $data->email = $request->email;
        $data->id_lokasi = $request->id_lokasi;
        $data->id_kendaraan = $request->id_kendaraan;
        $data->plat_nomor = $request->plat_nomor;
        $data->id_paket = $request->id_paket;
        $data->harga = $request->harga;
        $data->kartu_e = $request->kartu_e;
        $data->f_ktp = $request->f_ktp;
        $data->f_sim = $request->f_sim;
        $data->f_stnk = $request->f_stnk;
        $data->no_rekening = $request->no_rekening;
        $data->bukti_transaksi = $request->bukti_transaksi;

        return redirect('approve.listapprove')->with('success', 'Data Berhasil di Konformasi');
    }

    public function listapprove(Request $request){
        $data = Approve::paginate('10');

        $paket = Paket::all();
        $lokasi = Lokasi::all();
        $kendaraan = Kendaraan::all();


        return View ('approve/listapprove', compact('data', 'kendaraan'));
    }


    public function show(Request $request,$id)
    {
        $data = Approve::findOrFail($id);
        return view('approve.listapprove',compact('data'));
    }


    // public function harga(Request $request)
    // {
    //     $data['list_harga'] = \DB::table('pakets')->get();
    //     return view('user.approvedata',$data);
    // }


}
