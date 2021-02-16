@extends('layouts.admin' , ['title' => 'Notes'])
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white shadow-sm">
            <li class="breadcrumb-item active" aria-current="page"><b>NOTES</b></li>
        <li>
        <a href="{{route('pages.create')}}" class="btn btn-sm btn-primary ml-2">New Note</a>
        </li>
        </ol>
        </nav>

        <div class="row">
            @forelse($page as $page )
                <div class="col col-4 mt-3">

                    <div class="card border-0 shadow-sm">
                        <div class="card-header border-bottom-0 bg-white border-top border-success font-weight-bold">{{$page->title}} <div endpoint="{{route('pages.delete', $page)}}" class="delete float-right"></div> </div>
                        <div class="card-body"> {{ Str::limit($page->content, 15,'')}} <br>
                        <a href="{{route('pages.content')}}">Read More</a>
                        </div>
                        <div class="card-footer border-0 bg-white text-secondary font-italic" style="font-size:10px">
                        {{$page->user->name}} &middot; {{$page->created_at->diffForHumans()}}


                        </div>

                    </div>
                </div>
                @empty
                 <div class="alert alert-danger ml-3 ">Catatan Kosong!!</div>
            @endforelse
        


    </div>
</div>
<div id="example"></div>
@endsection
