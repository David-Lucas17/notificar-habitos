<header class="bg-zinc-950 text-white border-b-2 flex justify-between items-center p-4">
    <div>
        logo
    </div>

    <div>
        GitHub

        @auth
            <form class="inline" action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-white bg-orange-500 rounded-lg p-2">Sair</button>
            </form>
        @endauth

        @guest
            <a href="{{ route('auth.login') }}" class="text-white bg-orange-500 rounded-lg p-2">Login</a>
        @endguest
    </div>
</header>
