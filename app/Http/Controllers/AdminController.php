<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Admin;
use App\Models\Kendaraan;
//use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Str;
use App\Exports\AdminExport;
use App\Imports\AdminImport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



class AdminController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request){

        if($request->has('search')){
            $data = Admin::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Admin::paginate(10);
            Session::put('halaman_url', request()->fullUrl());
        }


        return view('admin/dataadmin',compact('data'));
    }

    public function tambahadmin(){
        $datakendaraan = Kendaraan::all();
        return view('admin/tambahadmin',compact('datakendaraan'));
    }

    public function insertadmin(Request $request){
        //dd($request->all()); /* check menggunakan Array */


        $this->validate($request,[
                'nama'          =>  'required|min:3|max:24',
                'jeniskelamin'  =>  'required',
                'notelpon'      =>  'required|min:9|max:13',
                'id_kendaraan'  =>  'required',
                'plat_nomor'    =>  'required',
                'foto'          =>  'required',
                'email'         =>  'required',
                'password'      =>  'required',
            ]);

        $data = Admin::create([                             // |\
            'nama' => $request->nama,                       // | \
            'jeniskelamin' => $request->jeniskelamin,       // |  \
            'notelpon' => $request->notelpon,               // |   \
            'id_kendaraan' => $request->id_kendaraan,
            'plat_nomor' => $request->plat_nomor,
            'foto' => $request->foto,                       // |    | ini coba input data dengan ngambil field satu" untuk mencoba mencocokan password menggunakan Encrypt
            'email' => $request->email,                     // |   /
            'password' => bcrypt($request->password),       // |  /
            'remember_token' => Str::random(60),            // | /
            'timestamps' => $request->timestamps,           // |/
        ]);

        //($request->all());                                // |       Ini input data langsung ambil semua field database "tetapi password belum terenkripsi"

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

        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoadmin/', $request->file('foto')->getClientOriginalName()); // Taroh DI Folder [fotoadmin/]
            $data->foto = $request->file('foto')->getClientOriginalName(); // Ambil namanya aja
            $data->save();
        }

        if (Session('halaman_url')) {
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

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
