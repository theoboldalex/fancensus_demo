@extends('layouts.shareable')

@section('content')
    <div class="min-h-screen bg-black flex justify-center items-center text-white">
        <div class="flex flex-col">
            <a href="{{ config('app.url') }}">
                <h1 class="font-semibold text-8xl my-6 text-white"><span class="text-blue-400">µ</span>Link</h1>
            </a>

            <h3 class="font-semibold text-3xl text-center my-4">This user has no links...</h3>
            
        </div>
    </div>
@endsection