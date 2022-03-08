@extends('home2')
@section('create')
    <div class="content">
        <div class="card-body">
            <form action="{{ url('simpan-pegawai') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="email">
                </div>
                <div class="form-group">
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="name">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="password">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-group-sm">create data</button>
                </div>
            </form>
        </div>
    @endsection
