@extends('layouts.app')

@section('content')
    <div class="mx-4 md:mx-40 my-4 md:mx-10">
        <h1>Hello, {{ auth()->user()->email }}</h1>
    </div>
@endsection