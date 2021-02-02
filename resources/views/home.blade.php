@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
           <table class="table table-bordered">
               <thead>
                   <th>nis</th>
                   <th>Nama</th>
                   <th>Kelas</th>
                   <th>Jurusan</th>
                   <th>Aksi</th>
               </thead>
               <tbody>
                   @foreach($siswa as $s)
                   <tr>
                       <td>{{$s->nis}}</td>
                       <td>{{$s->nama}}</td>
                       <td>{{$s->kelas->name}}</td>
                       <td>{{$s->jurusan->name}}</td>
                       <td>
                       <a href="#" class="btn btn-sm btn-success">Detail</a>
                       <a href="#" class="btn btn-sm btn-danger">Delete</a>
                       </td>
                   </tr>

                   @endforeach
               </tbody>
           </table>
                   <a href="{{route('post.create')}}" class="btn btn-primary">TAMBAH</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
