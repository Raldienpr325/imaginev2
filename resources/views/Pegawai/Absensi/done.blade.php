@extends('home')

@section('done-absensi')
    <div class="content" style="padding:20px">
        <div class="row justify-content-center">
            <div class="card card-info card-outline">
                <h1 class="text-center">Anda sudah melakukan absensi</h1>
            </div>
        </div>
    </div>
    </div>
    @include('sweetalert::alert')
@endsection
