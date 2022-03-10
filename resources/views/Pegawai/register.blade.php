@extends('layouts.app')

@section('register-pegawai')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark text-white">
                    <div class="card-header">{{ __('Register Admin  ') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('store-pegawai') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="NIP" class="col-md-4 col-form-label text-md-end">{{ __('NIP') }}</label>

                                <div class="col-md-6">
                                    <input id="NIP" type="text" class="form-control @error('NIP') is-invalid @enderror"
                                        name="NIP" value="{{ old('NIP') }}" required autocomplete="NIP" autofocus>

                                    @error('NIP')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="namalengkap"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Lengkap') }}</label>

                                <div class="col-md-6">
                                    <input id="namalengkap" type="text"
                                        class="form-control @error('namalengkap') is-invalid @enderror" name="namalengkap"
                                        value="{{ old('namalengkap') }}" required autocomplete="namalengkap">

                                    @error('namalengkap')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jeniskelamin"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}
                                </label>

                                <div class="col-md-6">
                                    <input id="jeniskelamin" type="text"
                                        class="form-control @error('jeniskelamin') is-invalid @enderror" name="jeniskelamin"
                                        required autocomplete="new-jeniskelamin">

                                    @error('jeniskelamin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-warning">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
