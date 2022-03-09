<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Absensi;
use DateTime;
use DateTimeZone;

class AbsensiController extends Controller
{
    public function absensimasuk()
    {
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
        $dtabsensi =[
            'nama' => auth()->user()->name,
            'tanggal' => $date,
            'jammasuk' => date('Y-m-d H:i:s', $jammasuk),
            'jamkeluar' => date('Y-m-d H:i:s', $jamkeluar),
            'jamkerja' => $jamkerja
        ];
        Absensi::create($dtabsensi);
        return redirect('/absensi-masuk')->with('success', 'anda berhasil melakukan absensi');
        
    }
}