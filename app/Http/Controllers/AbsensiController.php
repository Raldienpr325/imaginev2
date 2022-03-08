<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Absensi;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\DB;

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
        // $dtabsensi =[
        //     'nama' => auth()->user()->name,
        //     'tanggal' => $date,
        //     'jammasuk' => $jammasuk,
        //     'jamkeluar' => $jamkeluar,
        //     'jamkerja' => $jamkerja
        // ];
         Absensi::firstOrCreate(
             ['nama' =>auth()->user()->name],
             ['tanggal' => $date,
             'jammasuk' => $jammasuk,
             'jamkeluar' => $jamkeluar,
             'jamkerja' => $jamkerja]
         );
        //  dd($firstorCreate);

         return redirect('/absensi-masuk')->with('success','anda berhasil melakukan absensi');
     }

    
    
}