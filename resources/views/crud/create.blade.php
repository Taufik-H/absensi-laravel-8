@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">KOLOM INPUT V.1  <a href="{{route('dashboard')}}" class="btn btn-sm btn-outline-success">Let's See What Happen</a></div>

        <div class="card-body">
            <form method="post" action ="{{route('post.store')}}" enctype="multipart/form-data" >
                @csrf
            <div class="row">
                <div class="col col-md-6">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control" id="nis" name="nis">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">


                        <div class="form-group col col-sm-5">
                            <label for="kelas">kelas</label>
                            <select class="form-control" id="kelas" name="id_kelas">
                                <option disabled selected>Pilih Kelas!</option>
                                @foreach($kelas as $kelas)
                                <option value="{{ $kelas->id}}">{{ $kelas->name}}</option>

                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col col-sm-5 ">
                            <label for="jurusan">jurusan</label>
                            <select class="form-control" id="jurusan" name="id_jurusan">
                                <option disabled selected>Pilih Jurusan!</option>
                                @foreach ($jurusans as $jurusan)
                                <option value="{{$jurusan->id}}">{{$jurusan->name}}</option>
                                @endforeach
                            </select>
                        </div>



                    <label for="alamat">alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                    <label for="telepon">telepon</label>
                    <input type="text" class="form-control" id="telepon" name="no_hp">
                    <label for="jenis-kelamin">jenis kelamin</label>
                    <input type="text" class="form-control" id="jenis-kelamin" name="jenis_kelamin">
                    <button type="submit" class="btn btn-primary mt-2">KIRIM DATA</button>

                </div>
            </div>



            </form>
            </table>
        </div>
    </div>
</div>

@endsection
