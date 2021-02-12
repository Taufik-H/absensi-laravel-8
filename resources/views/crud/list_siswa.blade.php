@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header bg-white border-0"> <h6 class="m-0 font-weight-bold text-primary">List Siswa</h6></div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered table-sm">
                    <thead>
                        <th>#</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Action</th>
                    </thead>
                    <tbody class="text-center">
                        @foreach($siswa as $s)
                        <tr>
                            <td>#</td>
                            <td>{{$s->nis}}</td>
                            <td>{{$s->nama}}</td>
                            <td>{{$s->jenis_kelamin}}</td>
                            <td>{{$s->kelas->kelas}}</td>
                            <td>{{$s->jurusan->jurusan}}</td>
                            <td>{{$s->alamat}}</td>
                            <td>{{$s->no_hp}}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">EDIT</a>
                                <a href="#" class="btn btn-sm btn-danger">HAPUS</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-0">

        <a href="{{route('dashboard')}}" class="btn btn-primary">DASHBOARD</a>
        <div class=" border-0 float-right  m-0 ">  {{$siswa->links()}}</div>
        </div>
    </div>


</div>

@endsection
