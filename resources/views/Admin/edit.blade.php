@extends('home2')

@section('edit')
    <div class="content">
        <div class="card-body">
            <form action="{{ url('update-admin', $admin->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Nama dpm" required autofocus value="{{ $admin->name }}">
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="email" required autofocus value="{{ $admin->email }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-group-sm">edit data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
