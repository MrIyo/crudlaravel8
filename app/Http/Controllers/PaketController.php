<?php

namespace App\Http\Controllers;


use DateTime;
use Carbon\Carbon;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    public function datapaket(Request $request){
        $data = Paket::paginate('10');

        // yg diff In days bisa karena make append

        return View ('paket/datapaket', compact('data'));
        //  select id, sejak , sampai, datediff(sampai, sejak) as total_hari from pakets ; (ini sudah bisa di coba di sql)
    }

    public function tambahpaket(){
        return view ('paket/tambahpaket');
    }

    public function insertdatapaket(Request $request){
        $data = Paket::create($request->all());
        return redirect()->route('datapaket')->with('success', 'Data Berhasil di Buat');
    }

    public function tampilkanpaket($id){
        $data = Paket::find($id);
        return view('paket/tampilpaket', compact('data'));
    }

    public function updatepaket(Request $request, $id){
        $data = Paket::find($id);
        $data->update($request->all());
        return redirect()->route('datapaket')->with('success', 'Data Berhasil di Update');
    }

    public function deletepaket($id){
        $data = Paket::find($id);
        $data->delete();
        return redirect()->route('datapaket')->with('success','ata Berhasil di Hapus');
    }

    // $sejak  = \Carbon\Carbon::parse($request->sejak);
    // $sampai = \Carbon\Carbon::parse($request->sampai);
    // $selisihhari = $sampai->diffInDays($sejak);

}
