<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;
use PDF;
use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        return view('mahasiswa')->with('data', $data);
    }

    public function tampil()
    {
        $data=Mahasiswa::All();
        return view('mahasiswa', ['data'=>$data]);
    }

    public function tambah()
    {
        return view('tambah');
    }
    
    public function simpan(request $request)
    {
        $data=array(
            "nim"=>$request->nim,
            "nama"=>$request->nama,
            "alamat"=>$request->alamat,
            "hp"=>$request->hp,
        );

        $data=Mahasiswa::create($data);
        if($data){
            return redirect('/mahasiswa')->with(array('status'=>true,'Berhasil Tambah Data'));
      
        } else{
            return json_encode(array('status'=>false,'pesan'=>"Gagal Tambah data"));

        }
    }


        public function edit(request $request)
        {
            $data=Mahasiswa::where("nim", $request->nim)->update(array(
                "nama"=>$request->nama,
                "alamat"=>$request->alamat,
                "hp"=>$request->hp
            
            ));

            if($data){
                return redirect('/mahasiswa')->with(array('status'=>true,'Berhasil Ubah Data'));
      
        } else{
            return json_encode(array('status'=>false,'pesan'=>"Gagal Ubah data"));

            }
        }

        public function ubah($nim){
            $data=Mahasiswa::where('nim',$nim)->get();
            return view('ubah', ['data'=>$data]);
        }

        public function hapus($nim)
        {
            $data = Mahasiswa::where("nim", $nim)->delete();

            if($data){
                return redirect('/mahasiswa')->with(array('status'=>true,'Berhasil Hapus Data'));
          
            } else{
                return json_encode(array('status'=>false,'pesan'=>"Gagal Hapus data",
                ));

            }
        }

        public function cetak_pdf()
        {
            $mhs = Mahasiswa::all();
    
            $pdf = PDF::loadview('pdf',['mhs'=>$mhs]);
            return $pdf->download('laporan-mahasiswa.pdf');
        }

        public function export_excel()
        {
            return Excel::download(new MahasiswaExport,'mahasiswa.xlsx');
        }
    }
