@extends('layouts.app')

@section('content')
    <div class="mx-4 md:mx-40 my-4 md:mx-10">
        <h1 class="font-semibold text-3xl">Hello, {{ Str::before(auth()->user()->email, '@') }}!</h1>
        <div class="my-4">
            <label for="unique_url">Here is your unique, shareable URL.</label>
            <input type="text" value="hello" disabled class="p-2 border rounded-lg w-full my-4">
        </div>

        <div class="border bg-gray-200 rounded-lg my-6 shadow p-6">
            <h1 class="font-semibold text-3xl my-4">Create a Link</h1>

            <form action="" method="POST" class="font-light">
                @csrf
                <div class="w-full md:flex justify-between">
                    <div class="flex flex-col md:w-6/12 md:mr-4 my-4">
                        <label for="link_name">Link Name</label>
                        <input type="text" name="link_name" placeholder="TwitterBook" class="p-2 rounded-lg">
                    </div>
                    <div class="flex flex-col md:w-6/12 md:ml-4 my-4">
                        <label for="link_url">Link URL</label>
                        <input type="text" name="link_url" placeholder="https://twitterbook.com/username" class="p-2 rounded-lg">
                    </div>
                </div>
                <button type="submit" class="w-full my-4 rounded-lg text-white font-light py-2 px-4 bg-blue-400 hover:bg-blue-500 transition duration-300 ease">Save Link</button>
            </form>
        </div>
    </div>
@endsection