<nav class="w-full h-16 shadow bg-white">
    <div class="mx-4 md:mx-40 h-full flex justify-between items-center">
        <h1 class="font-semibold text-2xl"><span class="text-blue-400"><a href="{{ route('home') }}">µ</span>Link</a></h1>
        <div class="flex">
            @auth
                <a href="{{ route('dashboard', auth()->user()->id) }}" class="ml-8 hover:opacity-70 transition duration-300 ease">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="ml-8 hover:opacity-70 transition duration-300 ease">Logout</button>    
                </form> 
            @endauth
            @guest
                <a href="{{ route('login') }}" class="hover:opacity-70 transition duration-300 ease">Login</a>
                <a href="{{ route('register') }}" class="ml-8 hover:opacity-70 transition duration-300 ease">Register</a>
            @endguest
        </div>
    </div>
</nav>