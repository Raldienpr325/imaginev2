@extends('home')

@section('done-absensi')
    <div class="card text-center " style="margin-top: 10px">
        <div class="card-header">
            <h1 style="font-size: 32px; color:red">Mohon Maaf</h1>
        </div>
        <div class="card-body">
            <p class="card-text">
            <h3 style="color: red;font-size:24px">ABSENSI TIDAK BISA DILAKUKAN DIHARI MINGGU</h3>
            <p>Silahkan Logout</p>
            </p>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
