@extends('layouts.shareable')

@section('content')
    <div class="min-h-screen bg-black flex justify-center items-center text-white">
        <div class="flex flex-col">
            <a href="{{ config('app.url') }}">
                <h1 class="font-semibold text-8xl my-6 text-white"><span class="text-blue-400">µ</span>Link</h1>
            </a>

            <h3 class="font-semibold text-3xl text-center my-4">{{ Str::before($links[0]->user->email, '@') }}</h3>
            <div class="flex flex-col justify-center items-center my-4">
                @foreach ($links as $link)
                    <a href="{{ $link->link_url }}">
                        <div class="border rounded-lg font-semibold px-8 py-4 hover:text-black hover:bg-white transition duration-300 ease my-4">
                            {{ $link->link_name }}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection