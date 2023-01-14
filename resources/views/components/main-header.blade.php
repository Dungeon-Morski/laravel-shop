<header class="bg-gray-100 dark:bg-gray-900 sm:items-center py-4 flex justify-between ">
    <div class="container">
        <div class="flex justify-between w-full">
            <div class="text-white">
                <a href="#">Copy Star</a>
            </div>
            <div class="flex text-white gap-4">
                <a href="{{route('catalog')}}">Каталог</a>
                <a href="{{route('location')}}">Где нас найти?</a>
                <a href="{{route('about')}}">О нас</a>
            </div>
            @if (Route::has('login'))
                <div class=" sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-white underline">Личный Кабинет</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>

</header>
