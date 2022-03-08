@extends('home2')

@section('editpegawai')
    <div class="content">
        <div class="card-body">
            <form action="{{ url('update-pegawai', $pegawai->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" id="NIP" name="NIP" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Nip" required autofocus value="{{ $pegawai->NIP }}">
                </div>
                <div class="form-group">
                    <input type="text" id="namalengkap" name="namalengkap"
                        class="form-control @error('namalengkap') is-invalid @enderror" placeholder="namalengkap" required
                        autofocus value="{{ $pegawai->namalengkap }}">
                </div>
                <div class="form-group">
                    <input type="text" id="jeniskelamin" name="jeniskelamin"
                        class="form-control @error('jeniskelamin') is-invalid @enderror" placeholder="jeniskelamin" required
                        autofocus value="{{ $pegawai->jeniskelamin }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-group-sm">edit data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
