@extends('layouts.app', ['title' => 'Note Create'])
@section('content')
<div class="container">
 <div class="row">
    <div class="col-md-6">
     <div class="card">
        <div class="card-header">New Note

        @if ($message = Session::get('success'))
    <strong class="text-success float-right text-italic text-bold">{{ $message }}</strong>
    @endif

        </div>
        <div class="card-body">
        <form action="{{route('pages.store')}}" method="post">
        @csrf
            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
            <label for="title">Title</label>
            <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">kirim</button>
        </form>
        </div>
     </div>

    </div>
 </div>

</div>
<script>
  @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');
    @endif
</script>


  <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ selector:'textarea' });</script> -->
















@endsection
