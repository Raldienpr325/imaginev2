<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Absensi;
use DateTime;
use DateTimeZone;

class AbsensiController extends Controller
{
    public function absensimasuk(){
        // if (date!= minggu){
            return view('Pegawai.Absensi.masuk');
        // } 
        //else{
            // return redirect()->back()->with('error','absensi locked');
        // }
    }
    public function doneabsensi(){
        return view('Pegawai.Absensi.done');
    }
   
    public function storemasuk(Request $request){
       $timezone = 'Asia/Jakarta'; 
       $jammasuk = $request['jammasuk'];
       $jamkeluar = $request['jamkeluar'];
       $date = new DateTime('now', new DateTimeZone($timezone)); 
      
       $presensi = Absensi::where([
        ['user_id','=',auth()->user()->id],
        ['tanggal','=',$date],
    ])->first();
    if ($presensi){
        dd("sudah ada");
    }else{
        Absensi::create([
            'nama' => auth()->user()->name,
            'user_id' => auth()->user()->id,
            'tanggal' => $date,
            'jammasuk' => $jammasuk,
            'jamkeluar' => $jamkeluar
        ]);
    }
        return redirect('/absensi-masuk')->with('success','anda berhasil melakukan absensi');
    }

    
    
}