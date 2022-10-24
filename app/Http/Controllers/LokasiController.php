<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function datalokasi()
    {
        $data = Lokasi::paginate('10');
        return view ('lokasi/datalokasi', compact('data'));
    }

    public function tambahlokasi()
    {
        return view ('lokasi/tambahlokasi');
    }

    public function insertdatalokasi(Request $request)
    {
        // $data = Lokasi::create($request->all());
        // return redirect()->route('datalokasi')->with('success', 'Data Berhasil di Buat');
        $data = Lokasi::create($request->all());
        return redirect()->route('datalokasi')->with('success', 'Data Berhasil di Tambahkan');
    }

    public function tampilkanlokasi($id)
    {
        $data = Lokasi::find($id);
        return view('lokasi/tampilkanlokasi', compact('data'));
    }

    public function updatelokasi(Request $request, $id)
    {
        $data = Lokasi::find($id);
        $data->update($request->all());
        return redirect()->route('datalokasi')->with('success', 'Data Berhasil di Update');
    }

    public function deletelokasi($id)
    {
        $data = Lokasi::find($id);
        $data->delete();
        return redirect()->route('datalokasi')->with('success', 'Data Berhasil di Hapus');
    }
}
