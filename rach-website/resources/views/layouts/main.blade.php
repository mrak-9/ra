<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'РАЧ - Российская Ассоциация Челюстно-лицевых хирургов' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="/images/logo.png" alt="РАЧ" class="h-12 w-auto mr-3" onerror="this.style.display='none'">
                        <div>
                            <h1 class="text-xl font-bold text-gray-900">РАЧ</h1>
                            <p class="text-sm text-gray-600">Российская Ассоциация Челюстно-лицевых хирургов</p>
                        </div>
                    </a>
                </div>

                <!-- Contact Info & Login -->
                <div class="flex items-center space-x-6">
                    <div class="hidden md:block text-sm text-gray-600">
                        <p>Тел: +7 (495) 123-45-67</p>
                        <p>Email: info@rach.ru</p>
                    </div>
                    
                    @auth
                        <div class="relative">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Профиль') }}
                                    </x-dropdown-link>
                                    <x-dropdown-link :href="route('dashboard')">
                                        {{ __('Личный кабинет') }}
                                    </x-dropdown-link>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Выйти') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                            Войти в ЛК
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <!-- Main Navigation -->
    <nav class="bg-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex space-x-8">
                <a href="{{ route('home') }}" class="px-3 py-4 text-sm font-medium hover:bg-blue-700 transition duration-150 ease-in-out {{ request()->routeIs('home') ? 'bg-blue-900' : '' }}">
                    Главная
                </a>
                <div class="relative group">
                    <button class="px-3 py-4 text-sm font-medium hover:bg-blue-700 transition duration-150 ease-in-out flex items-center">
                        О нас
                        <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-0 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">СМИ о нас</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Международное сотрудничество</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Публичная оферта</a>
                        </div>
                    </div>
                </div>
                <a href="#" class="px-3 py-4 text-sm font-medium hover:bg-blue-700 transition duration-150 ease-in-out">
                    Отделения РАЧ
                </a>
                <a href="#" class="px-3 py-4 text-sm font-medium hover:bg-blue-700 transition duration-150 ease-in-out">
                    Новости
                </a>
                <a href="#" class="px-3 py-4 text-sm font-medium hover:bg-blue-700 transition duration-150 ease-in-out">
                    Мероприятия
                </a>
                <a href="#" class="px-3 py-4 text-sm font-medium hover:bg-blue-700 transition duration-150 ease-in-out">
                    Конференции и семинары
                </a>
                <a href="#" class="px-3 py-4 text-sm font-medium hover:bg-blue-700 transition duration-150 ease-in-out">
                    Наши издания
                </a>
                <a href="#" class="px-3 py-4 text-sm font-medium hover:bg-blue-700 transition duration-150 ease-in-out">
                    Наши проекты
                </a>
                <a href="#" class="px-3 py-4 text-sm font-medium hover:bg-blue-700 transition duration-150 ease-in-out">
                    Партнеры
                </a>
                <a href="#" class="px-3 py-4 text-sm font-medium hover:bg-blue-700 transition duration-150 ease-in-out">
                    Членство в РАЧ
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">РАЧ</h3>
                    <p class="text-gray-300 text-sm">
                        Российская Ассоциация Челюстно-лицевых хирургов - профессиональное объединение специалистов в области челюстно-лицевой хирургии.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Контакты</h3>
                    <div class="text-gray-300 text-sm space-y-2">
                        <p>Тел: +7 (495) 123-45-67</p>
                        <p>Email: info@rach.ru</p>
                        <p>Адрес: г. Москва, ул. Примерная, д. 1</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Дополнительно</h3>
                    <div class="text-gray-300 text-sm space-y-2">
                        <a href="#" class="block hover:text-white">Публичная оферта</a>
                        <a href="#" class="block hover:text-white">Политика конфиденциальности</a>
                        <a href="#" class="block hover:text-white">Карта сайта</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; {{ date('Y') }} РАЧ - Российская Ассоциация Челюстно-лицевых хирургов. Все права защищены.</p>
            </div>
        </div>
    </footer>
</body>
</html>