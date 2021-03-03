@extends('layouts.app')

@section('content')
    @auth
        hello {{ auth()->user()->email }}
    @endauth
    <h1>Hello, World!</h1>
@endsection