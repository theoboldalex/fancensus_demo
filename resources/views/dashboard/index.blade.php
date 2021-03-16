@extends('layouts.app')

@section('content')
    <div class="mx-4 md:mx-40 my-4 md:mx-10">
        <h1 class="font-semibold text-3xl">Hello, {{ auth()->user()->username }}!</h1>
        <div class="my-4">
            <label for="unique_url">Here is your unique, shareable URL.</label>
            <div class="relative">
                <input type="text" value="{{ config('app.url') }}{{ auth()->id() }}" class="p-2 border rounded-lg w-full my-4" id="copyUrlText" readonly>
                <button>
                    <i class="far fa-copy absolute right-0 top-0 mt-7 mr-4 opacity-50" id="copyUrlBtn"></i>
                </button>
            </div>
        </div>

        <div class="border bg-gray-200 rounded-lg my-4 shadow p-6">
            <h1 class="font-semibold text-3xl my-4">Create a Link</h1>

            <form action="{{ route('dashboard', auth()->id())}}" method="POST" class="font-light">
                @csrf
                <div class="w-full md:flex justify-between">
                    <div class="flex flex-col md:w-6/12 md:mr-4 my-4">
                        <label for="link_name">Link Name</label>
                        <input type="text" name="link_name" placeholder="TwitterBook" class="p-2 rounded-lg @error('link_name') border border-red-500 @enderror">
                        @error('link_name')
                            <small class="text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="flex flex-col md:w-6/12 md:ml-4 my-4">
                        <label for="link_url">Link URL</label>
                        <input type="text" name="link_url" placeholder="https://twitterbook.com/username" class="p-2 rounded-lg @error('link_url') border border-red-500 @enderror">
                        @error('link_url')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="w-full my-4 rounded-lg text-white font-light py-2 px-4 bg-blue-400 hover:bg-blue-500 transition duration-300 ease">Save Link</button>
            </form>
        </div>
        <div>
            <h1 class="font-semibold text-3xl">Your Links</h1>

            <hr class="my-4">
            @foreach ($links as $link)
                <div class="md:flex justify-between">
                    <p>{{ $link->link_name }}</p>
                    <p>{{ $link->link_url }}</p>
                    <div class="flex">
                        <a href="{{ route('edit_link', $link->id) }}" class="hover:opacity-70 transition duration-300 ease-in-out">
                            <i class="far fa-edit"></i>
                        </a>
                        <form action="{{ route('delete_link', $link->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="hover:opacity-70 transition duration-300 ease-in-out">
                                <i class="far fa-trash-alt ml-8"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <hr class="my-4">
                @endforeach
        </div>
    </div>

    <script>
        const copyUrlBtn = document.querySelector('#copyUrlBtn');

        copyUrlBtn.addEventListener('click', copyUrl);

        function copyUrl() {
            const copyUrlText = document.querySelector('#copyUrlText');
            copyUrlText.focus();
            copyUrlText.select();

            try {
                document.execCommand('copy');
            } catch (err) {
                console.error(err);
            }
        }
    </script>
@endsection
