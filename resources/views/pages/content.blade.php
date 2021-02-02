@extends('layouts.app', ['title' => 'Content'])
@section('content')

<div class="container">
    @foreach($page as $page)
    <div class="header">
    <h1 >{{$page->title}}</h1>
    </div>
    <p style="margin:0; padding:0; font-size:12px;"class="text-secondary m-0">{{$page->user->name}} &middot; {{$page->created_at->diffForHumans()}}</p>

</div>
@endforeach


@endsection
