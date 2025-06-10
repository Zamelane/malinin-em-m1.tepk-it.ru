<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'Наш декор')
        @hasSection('title')
            • Наш декор
        @endif
    </title>
    <link rel="icon" href="{{ asset('assets/logo/logo.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<header class="flex justify-center items-center">
    <div class="between header items-center">
        <a class="flex items-center gap-6 logo-title" href="{{ route('home') }}">
            <img src="{{ asset('assets/logo/logo.png') }}" alt="Лого" width="75" height="75">
            <h1>Наш декор</h1>
        </a>
        <nav class="flex items-center gap-6">
            <a class="btn" href="{{ route('products.index') }}">Продукты</a>
            {{--        <a class="btn" href="{{ route('partners.index') }}">Партнёры</a>--}}
        </nav>
    </div>
</header>
<main class="flex justify-center">
    <div class="main-content">

        <div class="flex between">
            <div>
                <h2 class="text-h line-height-1">@yield('title', '')</h2>
                @hasSection('back')
                    <a class="link text-lg" href="@yield('back')">Назад</a>
                @endif
            </div>
            <div class="buttons flex gap-6">
                @yield('buttons')
            </div>
        </div>

        @yield('content')
    </div>
</main>
</body>
</html>
