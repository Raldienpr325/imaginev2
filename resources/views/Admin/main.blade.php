@extends('home')
@section('homeAdmin')
    <div class="content">
        <div class="card-body">
            <p class="text-center">Ini merupakan data dari table admin(Users)</p>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Nama Lengkap</th>
                    <th>Action</th>
                </tr>
                @foreach ($dtAdmin as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->name }}</td>
                        <td><a href="{{ url('hapus-admin', $item->id) }}"> <button class="fas fa-trash border-0"
                                    style="color: red"></button></a>
                            <a href="{{ url('edit-admin', $item->id) }}"> <button class="fas fa-pen border-0"
                                    style="color: green"></button></a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
        @include('sweetalert::alert')

    </div>
@endsection
