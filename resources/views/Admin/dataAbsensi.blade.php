@extends('home')
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
                        <td></td>
                        <td>{{ $item->jammasuk }}</td>
                        <td>{{ $item->jamkeluar }}</td>

                        <td>Lama waktu : {{ $item->jamkerja }} </td>
                    </tr>
                @endforeach
                {{-- <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <td colspan="31" class="text-center">Tanggal</td>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                        <td>31</td>
                        <th>Jam Kerja</th>
                    </tr>
                    {{-- <th>Jam Masuk</th> --}}
                {{-- <th>Jam Keluar</th> 

                </tr>
                @foreach ($dtabsensi as $item)
                    <tr>


                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->id }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        {{-- <td>{{ $item->jammasuk }}</td> --}}
                {{-- <td>{{ $item->jamkeluar }}</td> --}}
                {{-- <td>Lama waktu : {{ $item->jamkerja }} </td> 
                        </tr>
                    @endforeach --}}
                </td>
            </table>
            </td>
            </table>
        </div>
    </div>
@endsection
