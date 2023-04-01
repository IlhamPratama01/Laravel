<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller

{
    //menampilkan isi sesion
    public function tampilkanSession(Request $request){
        if($request->session()->has('nama')){
            echo $request->session()->get('nama');

        }else{
            echo 'Tidak ada data dalam session.';
        }
    }
 
    // membuat session
    
    public function buatSession(Request $request){
     $request->session()->put('nama', 'Marta Ardiyanto - Administrator');      
      echo "Data telah ditambahkan ke session.";
    
    }    
    
    // menghapus session
    
    public function hapusSession(Request $request){
         $request->session()->forget ('nama'); 
         echo "Data telah dihapus dari session.";
    
        }
}

