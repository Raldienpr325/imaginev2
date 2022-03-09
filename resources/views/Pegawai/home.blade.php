@extends('home')

@section('homee')
    <div class="wrapper">
        <h4 class="text-center" style="line-height:200px">Hi Selamat datang di Website Absensi Online</h4>
        <a href="{{ url('absensi-masuk') }}" style="text-decoration: none">
            <p class="text-center" style="margin-top: -90px">Klik disini untuk melakukan absensi</p>
        </a>
    </div>
@endsection
