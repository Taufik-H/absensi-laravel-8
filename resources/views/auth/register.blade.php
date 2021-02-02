@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
<div class="container">
  <div class="row content ">
    <div class="col sm-6 m-0">
        <img src="{{asset('image/login-image.jpg')}}" alt="image" class="img-fluid float-left">
    </div>
    <div class="col sm-6">
        <h3 class="regist-text mb-2 mt-3"><span>{{__('Registrasi')}}</span></h3>
            <form method="POST" action="{{route('register')}}" >
               @csrf

                        <div class="row mr-2">
                        <div class="col col-sm-12 mb-4">
                        <label for="nama" class="text-secondary">Nama</label>
                        <input id="nama"type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                             @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        <label for="email" class="text-secondary">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email">
                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col col-sm-7">
                            <div class="">
                                <label class="btn btn-sm btn-primary mr-4" for="laki-laki">Laki Laki</label>
                                <input class="form-check-input " type="radio" value="laki-laki" id="laki-laki" name="jenis_kelamin">
                            <!-- </div> -->
                        <!-- </div>
                        <div class="col col-sm-5"> -->
                            <!-- <div class=""> -->
                                <label class="btn btn-sm btn-pink mr-4" for="Perempuan">Perempuan</label>
                                <input class="form-check-input is-valid was-validate  " type="radio" value="perempuan" id="Perempuan" name="jenis_kelamin">
                            </div>
                        </div>

                        <!-- password -->

                            <div class="col col-sm-6 text-center">
                                <label for="password" class="text-secondary">password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col col-sm-6 text-center">
                            <label for="confirm-password " class="text-secondary" >confirm password</label>
                            <input type="password"class="form-control" name="password_confirmation" required autocomplete="new-password" name="confirm-password">
                            </div>
                            <!-- password -->

                                <div class="col col-sm-12 mt-4">
                                    <button class="btn btn-md btn-primary " type="submit">{{__('Registrasi')}}</button>
                                    <a href="{{ __('login') }}" class="btn btn-link btn-sm border-0">Saya Punya Akun!</a>
                                </div>
                        </div>



            </form>
    </div>
  </div>
</div>
@endsection

