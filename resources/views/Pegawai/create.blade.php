@extends('home2')
@section('create')
    <div class="content">
        <div class="card-body">
            <form action="{{ url('simpan-admin') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" id="NIP" name="NIP" class="form-control @error('NIP') is-invalid @enderror"
                        placeholder="Nip">
                </div>
                <div class="form-group">
                    <input type="text" id="namalengkap" name="namalengkap"
                        class="form-control @error('namalengkap') is-invalid @enderror" placeholder="namalengkap">
                </div>
                <div class="form-group">
                    <input type="text" id="jeniskelamin" name="jeniskelamin"
                        class="form-control @error('jeniskelamin') is-invalid @enderror" placeholder="jeniskelamin" d>
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-group-sm">create data</button>
                </div>
            </form>
        </div>
    @endsection
