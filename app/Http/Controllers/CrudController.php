<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Absensi;
class CrudController extends Controller
{
    public function index(){
        return view('home');
    }

    public function mngAdmin(){
        $dtAdmin = User::all();
        return view('Admin.main', compact('dtAdmin'));
    }

    public function mngPegawai(){ 
        $dtpegawai = Pegawai::all();
        return view ('Pegawai.main',compact('dtpegawai'));
    }
    public function dtpegawai(){ 
        $pegawai = Pegawai::all();
        return view ('home2',compact('pegawai'));
    }

 
    public function dataAbsensi(){
        $dtabsensi = Absensi::all();
        return view('Admin.dataAbsensi', compact('dtabsensi'));
    }

    public function edit($id){
        $admin = User::findorfail($id);
        return view('Admin.edit',compact('admin'));
    }
    
    public function update(Request $request, $id){
        $admin = User::findorfail($id);
        $admin->update($request->all());
        return redirect('mng-admin')->with('success','data berhasil diupdate');
    }

    public function destroy($id){
        $admin=User::findorfail($id);
        $admin->delete();
        return redirect('mng-admin')->with('success','data berhasil dihapus');
    }

    public function editpegawai($id){
        $pegawai = Pegawai::findorfail($id);
        return view('Pegawai.edit',compact('pegawai'));
    }
    
    public function updatepegawai(Request $request, $id){
        $pegawai = Pegawai::findorfail($id);
        $pegawai->update($request->all());
        return redirect('mng-pegawai')->with('success','data berhasil diupdate');
    }

    public function destroypegawai($id){
        $pegawai=Pegawai::findorfail($id);
        $pegawai->delete();
        return redirect('mng-pegawai')->with('success','data berhasil dihapus');
    }

    public function printpdf(){
        $pdf = Absensi::all();
        return view('Admin.printpdf',compact('pdf'));
    }

    public function create(){
        return view('Pegawai.create');
    }

    public function store(Request $request){
        // dd($request);
        Pegawai::create([
            'NIP' => $request->NIP,
            'namalengkap' =>$request->namalengkap,
            'jeniskelamin' => $request->jeniskelamin
        ]);
        return redirect('/mng-pegawai')->with('success','data berhasil ditambahkan!');
    }

    public function createpegawai(){
        return view('Admin.create');
    }

    public function storepegawai(Request $request){
        // dd($request);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/mng-admin')->with('success','data berhasil ditambah');
    }

    
    

    
}