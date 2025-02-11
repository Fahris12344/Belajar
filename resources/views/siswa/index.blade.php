@extends('partials.main')
@section('content')

<h1 class="text-center">Data Siswa</h1>
<div class="container">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{route('siswa.create')}}" class="btn btn-success " style="margin-left: 180px">Tambah</a>
    <div class="container mt-4 d-flex justify-content-center">
        <table class="table table table-hover text-center w-75">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $siswas)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $siswas['nama'] }}</td>
                        <td>{{ $siswas['alamat'] }}</td>
                        <td>{{ $siswas['jenis_kelamin'] }}</td>
                        <td>
                            <form action="{{Route('siswa.destroy', $siswas['id'])}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</table>
@endsection