@extends('home2')
@section('homePegawai')
    <div class="content">
        <div class="card-body">
            <a href="{{ url('create-admin') }}" class="btn btn-success btn-sm" style="float: right;margin-bottom:10px">add
                data</a>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                </tr>
                @foreach ($dtpegawai as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->NIP }}</td>
                        <td>{{ $item->namalengkap }}</td>
                        <td>{{ $item->jeniskelamin }}</td>
                        <td><a href="{{ url('hapus-pegawai', $item->id) }}"> <button class="fas fa-trash border-0"
                                    style="color: red"></button></a>
                            <a href="{{ url('edit-pegawai', $item->id) }}" style="text-decoration: none;font-weight:500">
                                <button type="button" class="btn btn-link btn-sm"></button>EDIT</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{-- <div class="card-footer">{{ $dtlayanan->links() }}</div> --}}
        @include('sweetalert::alert')
    </div>
@endsection
