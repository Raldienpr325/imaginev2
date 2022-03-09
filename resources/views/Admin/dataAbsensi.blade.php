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
                    <th>Nama</th>
                    <th>tanggal</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Jam Kerja</th>
                </tr>
                @foreach ($dtabsensi as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->jammasuk }}</td>
                        <td>{{ $item->jamkeluar }}</td>
                        <td> {{ $item->jamkerja }} Jam </td>
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
