@extends('home2')
@section('homePegawai')
    <div class="content">
        <div class="card-body">
            <p class="text-center">ini merupakan data dari tabel absensi</p>
            <a href="{{ url('print-pdf') }}" target="_blank" class="btn btn-danger btn-sm"
                style="margin-bottom: 10px;float: right;">Download
                PDF</a>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Jam Kerja</th>
                </tr>
                @foreach ($dtabsensi as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->id }}</td>
                        <td></td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jammasuk }}</td>
                        <td>{{ $item->jamkeluar }}</td>
                        <td>Lama waktu : {{ $item->jamkerja }} </td>
                    </tr>
                @endforeach
                </td>
            </table>
            </td>
            </table>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
