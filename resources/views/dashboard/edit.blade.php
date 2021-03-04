@extends('layouts.app')

@section('content')
    <div class="mx-4 md:mx-40 my-4 md:mx-10">
        <a href="{{ url()->previous() }}" class="text-blue-400 text-xl">Back</a>
        <div class="border bg-gray-200 rounded-lg my-4 shadow p-6">
            <h1 class="font-semibold text-3xl my-4">Edit your link</h1>

            <form action="{{ route('edit_link', $link->id)}}" method="POST" class="font-light">
                @csrf
                @method('put')
                <div class="w-full md:flex justify-between">
                    <div class="flex flex-col md:w-6/12 md:mr-4 my-4">
                        <label for="link_name">Link Name</label>
                        <input type="text" name="link_name" placeholder="TwitterBook" class="p-2 rounded-lg @error('link_name') border border-red-500 @enderror" value="{{ $link->link_name }}">
                        @error('link_name')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="flex flex-col md:w-6/12 md:ml-4 my-4">
                        <label for="link_url">Link URL</label>
                        <input type="text" name="link_url" placeholder="https://twitterbook.com/username" class="p-2 rounded-lg @error('link_url') border border-red-500 @enderror" value="{{ $link->link_url }}">
                        @error('link_url')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="w-full my-4 rounded-lg text-white font-light py-2 px-4 bg-blue-400 hover:bg-blue-500 transition duration-300 ease">Update Link</button>
            </form>
        </div>
    </div>
@endsection