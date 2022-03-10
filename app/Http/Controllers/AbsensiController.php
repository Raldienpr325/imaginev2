<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Absensi;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    public function absensimasuk()
    {
        $format = 'Y-m-d';
        $date = DateTime::createFromFormat($format, '2009-02-15');
        // dd($date);
        $cek = DB::table('absensi')->where('nama', Auth::user()->name && 'tanggal',$date )->first();
        if($cek){
            dd('sudah absen');
        }else{
            return view('Pegawai.Absensi.masuk');
        }
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $dateabsensi = (date('D') == 'Sun');
        if ($date == $dateabsensi){
            return redirect('/absensi-libur')->with('warning', 'Absensi Ditutup');
        }else{
            return view('Pegawai.Absensi.masuk');
        }
    }
    public function doneabsensi()
    {
        return view('Pegawai.Absensi.done');
    }
   
    public function storemasuk(Request $request)
    {
        $timezone = 'Asia/Jakarta';
        $jammasuk = strtotime($request->jammasuk);
        $jamkeluar = strtotime($request->jamkeluar);
        $date = new DateTime('now', new DateTimeZone($timezone));
        $jamkerja =  floor(($jamkeluar - $jammasuk)/3600);
    
        Absensi::firstOrCreate(
            ['nama'=>auth()->user()->name,
             'jammasuk' =>date('Y-m-d H:i:s', $jammasuk),
             'jamkeluar' => date('Y-m-d H:i:s', $jamkeluar),
             'tanggal' => $date],
            ['nama'=>auth()->user()->name ,
            'tanggal' => $date,
            'jammasuk' => date('Y-m-d H:i:s', $jammasuk),
            'jamkeluar' => date('Y-m-d H:i:s', $jamkeluar),
            'jamkerja' => $jamkerja
            ]
        );
        return redirect('/absensi-masuk')->with('success', 'anda berhasil melakukan absensi');
    }
}