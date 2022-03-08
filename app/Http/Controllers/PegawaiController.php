<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
   

    public function viewlogin(){
        return view('Pegawai.login');
    
    }
    
    public function index(Request $request){
        $nip = $request['NIP'];
        $namalengkap = $request['namalengkap'];
        $cekdata = DB::table('pegawais')->where('NIP', $nip)->first();
        $cekdata2 = DB::table('pegawais')->where('namalengkap', $namalengkap)->first();
        if($cekdata && $cekdata2){
            return redirect('/mng-admin');
        }else{
            return redirect()->back()->withErrors(['msg' => 'NIP atau nama anda salah !!']);
        }
    }
    
    public function viewregister(){
        return view('Pegawai.register');
    }
    
    public function store(Request $request){
        $dtregister = $request->validate([
            'NIP' => 'required',
            'namalengkap' => 'required',
            'jeniskelamin' => 'required',
        ]);
        Pegawai::create($dtregister);
        return redirect('/login-pegawai');
       
    }
    
}