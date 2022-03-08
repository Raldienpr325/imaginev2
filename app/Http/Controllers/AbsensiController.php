<?php

namespace App\Http\Controllers;

use GuzzleHttp\RedirectMiddleware;
use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;
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
       $localtime = $date->format('H:i:s');
      
       $jamkerja =  date('H:i:s', strtotime($localtime) - strtotime($jamkeluar));
       $dtabsensi =[
           'tanggal' => $date,
           'jammasuk' => $jammasuk,
           'jamkeluar' => $jamkeluar,
           'jamkerja' => $jamkerja
       ];
        Absensi::create($dtabsensi);
        $data = DB::table('pegawais')
        ->join('absensi','absensi.id','=','pegawais.id')->get();
        dd($data);
        return redirect('/absensi-masuk')->with('success','anda berhasil melakukan absensi');
    }

    
    
}