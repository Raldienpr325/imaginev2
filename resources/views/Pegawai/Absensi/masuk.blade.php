@extends('home')

@section('absensi-masuk')
    <div class="card " style="top:100px;">
        <div class="card-header ">Presensi </div>
        <div class="card-body">
            <form action="{{ url('store-masuk') }}" method="post">
                @csrf
                <p>Jam Masuk</p>
                <div class="form-group">
                    <input type="time" id="jammasuk" name="jammasuk"
                        class="form-control @error('jammasuk') is-invalid @enderror">
                </div>
                <p>Jam keluar</p>
                <div class="form-group">
                    <input type="time" id="jamkeluar" name="jamkeluar"
                        class="form-control @error('jamkeluar') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-group-sm">Absensi</button>
                </div>

            </form>
        </div>
    </div>

    @include('sweetalert::alert')
@endsection
