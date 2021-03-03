@extends('layouts.main')

@section('template')
    <header>
        @include('partials.navbar')
    </header>
    <main>
        @yield('content')
    </main>
@endsection
