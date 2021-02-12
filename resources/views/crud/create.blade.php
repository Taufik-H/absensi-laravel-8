@extends('layouts.admin')
@section('content')

<div class="container d-flex justify-content-center">
    <div class="card bg-white shadow col-7 mb-5 mt-5">
        <div class="card-header bg-white border-0">     <h6 class="m-0 font-weight-bold text-primary">Tambah Siswa</h6> </div>

        <div class="card-body">
            <form method="post" action ="{{route('post.store')}}" enctype="multipart/form-data" >
                @csrf
                <!-- row 1 -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="name" name="nama">
                    </div>
                    </div>
                </div>

                <!-- row 2 -->
                <div class="row mb-4">
                    <div class="col col-md-6">

                      <label for="kelas">kelas</label>
                            <select class="form-control" id="kelas" name="id_kelas">
                                <option disabled selected>Pilih Kelas!</option>
                                @foreach($kelas as $kelas)
                                <option value="{{ $kelas->id}}">{{ $kelas->kelas}}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="col col-md-6">
                        <label for="jurusan">jurusan</label>
                            <select class="form-control" id="jurusan" name="id_jurusan">
                                <option disabled selected>Pilih Jurusan!</option>
                                @foreach ($jurusans as $jurusan)
                                <option value="{{$jurusan->id}}">{{$jurusan->jurusan}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <!-- row 2 -->
                <div class="row">
                    <div class="col">
                        <label for="alamat">alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                    <label for="telepon">telepon</label>
                    <input type="text" class="form-control" id="telepon" name="no_hp">
                    <label for="jenis-kelamin">jenis kelamin</label>
                    <input type="text" class="form-control" id="jenis-kelamin" name="jenis_kelamin">
                    <button type="submit" class="btn btn-primary mt-5">KIRIM DATA</button>
                    </div>
                </div>
            </form>
            </table>
        </div>
    </div>
</div>

@endsection
