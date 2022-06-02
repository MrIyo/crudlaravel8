<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Exports\AdminExport;
use App\Imports\AdminImport;
//use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Admin::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $data = Admin::paginate(5);
        }


        return view('admin/dataadmin',compact('data'));
    }

    public function tambahadmin(){
        return view('admin/tambahadmin');
    }

    public function insertadmin(Request $request){
        //dd($request->all()); /* check menggunakan Array */
        $data = Admin::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoadmin/', $request->file('foto')->getClientOriginalName()); // Taroh DI Folder [fotoadmin/]
            $data->foto = $request->file('foto')->getClientOriginalName(); // Ambil namanya aja
            $data->save();
        }
        return redirect()->route('admin')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){
        $data = Admin::find($id);
        //dd($data);
        return view('admin/tampiladmin', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Admin::find($id);
        $data->update($request->all());
        return redirect()->route('admin')->with('success','Data Berhasil Di Update');
    }

    public function delete($id){
        $data = Admin::find($id);
        $data->delete();
        return redirect()->route('admin')->with('success','Data Berhasil Di Hapus');
    }

    public function exportpdf(){
        $data = Admin::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('admin/dataadmin-pdf'); // Lokasi yg akan di cetak di ambil dari view ('admin/dataadmin-pdf.blade.php')
        return $pdf->download('data-admin.pdf'); // setelah download nama file akan otomatis tercetak 'data--pegawai.pdf'
    }

    public function exportexcel(){
        return Excel::download(new AdminExport, 'data-admin.xlsx');
    }

    public function importexcel(Request $request){
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('AdminData', $namafile);

        Excel::import(new AdminImport, \public_path('/AdminData/'.$namafile));
        return \redirect()->back();
    }

}
