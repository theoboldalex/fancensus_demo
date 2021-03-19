@extends('layouts.app')

@section('content')
    <div class="mx-4 md:mx-40 my-6 md:my-20">
        <div class="flex justify-center" id="alert">
            @if (session('status'))
                <div class="w-6/12 py-2 border border-red-500 rounded-lg bg-red-200 text-red-800 text-center my-4">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="w-full flex justify-center">

            <div class="w-full md:w-6/12 bg-gray-200 rounded-lg shadow p-8">
                <h1 class="font-semibold text-3xl">Login</h1>

                <form action="{{ route('login') }}" method="POST" class="font-light py-4">
                    @csrf
                    <div class="flex flex-col my-4">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="border rounded-lg p-2 @error('email') border-red-500 @enderror" placeholder="joe_bloggs@email.com" value="{{ old('email') }}">
                        @error('email')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="flex flex-col my-4">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="border rounded-lg p-2 @error('password') border-red-500 @enderror" placeholder="********">
                        @error('password')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="py-2 px-4 bg-blue-400 text-white hover:bg-blue-500 transition duration-300 ease rounded-lg w-full font-light">Login</button>
                </form>

                <small>Don't have an account? <a href="{{ route('register') }}" class="text-blue-500">Register</a></small>
            </div>
        </div>
    </div>
    <script>
        const alert = document.querySelector('#alert');

        setTimeout(() => {
            alert.style.display = "none";
        }, 5000)
    </script>
@endsection
