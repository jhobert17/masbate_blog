<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-green-300 py-6">
            <div class="container mx-auto flex justify-between items-left px-6">
                <div>
                    <img src="/images/coconut.png" class="w-6 rounded-circle float-left">
                    <a href="{{ url('/') }}" class="float-left text-2xl font-semibold text-gray-900 no-underline">
                        Masbate Blog
                    </a>
                </div>
                <nav class="space-x-3 text-gray-900 text-sm sm:text-base">
                    
                    <a class="text-xl no-underline hover:underline" href="/blog">Blogs</a>
                        
                    @guest
                        <a class="pl-3 border-l-2 border-black no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span class="text-xl pl-3 border-l-2 border-black ">{{ Auth::user()->username }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
              @yield('content')
        </div>

    </div>
</body>
</html>
