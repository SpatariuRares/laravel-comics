@extends('layouts.app')

@section('content') 
    <div class="container">
        @foreach($comics as $comic)
            <img src="{{$comic['thumb']}}" alt="">
        @endforeach
    </div>
@endsection