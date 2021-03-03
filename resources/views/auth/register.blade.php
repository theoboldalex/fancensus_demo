@extends('layouts.app')

@section('content')
    <div class="mx-4 md:mx-40 my-6 md:my-20">
        <div class="w-full flex justify-center">
            <div class="w-full md:w-6/12 bg-gray-200 rounded-lg shadow p-8">
                <h1 class="font-semibold text-3xl">Register</h1>

                <form action="" method="POST" class="font-light py-4">
                    @csrf
                    <div class="flex flex-col my-4">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="border rounded-lg p-2 @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                        @error('email')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="flex flex-col my-4">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="border rounded-lg p-2 @error('password') border-red-500 @enderror">
                        @error('password')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="flex flex-col my-4">
                        <label for="password_confirmation">Confirm Password:</label>
                        <input type="password" name="password_confirmation" class="border rounded-lg p-2">
                    </div>
                    <button type="submit" class="py-2 px-4 bg-blue-400 text-white hover:bg-blue-500 transition duration-300 ease rounded-lg w-full font-light">Register</button>
                </form>

                <small>Already have an account? <a href="{{ route('login') }}" class="text-blue-500">Login</a></small>
            </div>
        </div>
    </div>
@endsection