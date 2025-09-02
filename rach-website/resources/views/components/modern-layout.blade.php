<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Главная' }} - {{ config('app.name', 'РАЧ') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .glass-effect { backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.95); }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
        .hero-gradient { background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%); }
    </style>
</head>
<body class="font-sans antialiased bg-gradient-to-br from-slate-50 to-blue-50 min-h-screen">
    <!-- Header -->
    <header class="glass-effect border-b border-white/20 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center group">
                        <div class="w-14 h-14 gradient-bg rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                            <span class="text-white font-bold text-xl">РАЧ</span>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">РАЧ</h1>
                            <p class="text-sm text-slate-600 font-medium">Российская Ассоциация Челюстно-лицевых хирургов</p>
                        </div>
                    </a>
                </div>

                <!-- Contact Info & Auth -->
                <div class="flex items-center space-x-8">
                    <div class="hidden lg:block text-right">
                        <p class="text-sm font-semibold text-slate-700">+7 (495) 123-45-67</p>
                        <p class="text-sm text-slate-600">info@rach.ru</p>
                    </div>
                    
                    @auth
                        <div class="flex items-center space-x-4">
                            <div class="text-right">
                                <p class="text-sm font-semibold text-slate-700">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-slate-500">Добро пожаловать!</p>
                            </div>
                            <a href="{{ route('dashboard') }}" class="gradient-bg hover:shadow-lg text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 hover:scale-105">
                                Личный кабинет
                            </a>
                        </div>
                    @else
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('login') }}" class="text-slate-700 hover:text-blue-600 px-4 py-2 text-sm font-semibold transition-all duration-300 hover:bg-white/50 rounded-lg">
                                Войти
                            </a>
                            <a href="{{ route('register') }}" class="gradient-bg hover:shadow-lg text-white px-6 py-3 rounded-xl text-sm font-semibold transition-all duration-300 hover:scale-105">
                                Регистрация
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="glass-effect border-b border-white/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <div class="flex space-x-1">
                    <a href="{{ route('home') }}" class="relative px-4 py-4 text-sm font-semibold text-slate-700 hover:text-blue-600 transition-all duration-300 group {{ request()->routeIs('home') ? 'text-blue-600' : '' }}">
                        Главная
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 transform {{ request()->routeIs('home') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="{{ route('about') }}" class="relative px-4 py-4 text-sm font-semibold text-slate-700 hover:text-blue-600 transition-all duration-300 group {{ request()->routeIs('about*') ? 'text-blue-600' : '' }}">
                        О нас
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 transform {{ request()->routeIs('about*') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="{{ route('departments') }}" class="relative px-4 py-4 text-sm font-semibold text-slate-700 hover:text-blue-600 transition-all duration-300 group {{ request()->routeIs('departments*') ? 'text-blue-600' : '' }}">
                        Отделения РАЧ
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 transform {{ request()->routeIs('departments*') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="{{ route('news') }}" class="relative px-4 py-4 text-sm font-semibold text-slate-700 hover:text-blue-600 transition-all duration-300 group {{ request()->routeIs('news*') ? 'text-blue-600' : '' }}">
                        Новости
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 transform {{ request()->routeIs('news*') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="{{ route('events') }}" class="relative px-4 py-4 text-sm font-semibold text-slate-700 hover:text-blue-600 transition-all duration-300 group {{ request()->routeIs('events*') ? 'text-blue-600' : '' }}">
                        Мероприятия
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 transform {{ request()->routeIs('events*') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="{{ route('conferences') }}" class="relative px-4 py-4 text-sm font-semibold text-slate-700 hover:text-blue-600 transition-all duration-300 group {{ request()->routeIs('conferences*') ? 'text-blue-600' : '' }}">
                        Конференции
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 transform {{ request()->routeIs('conferences*') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="{{ route('publications') }}" class="relative px-4 py-4 text-sm font-semibold text-slate-700 hover:text-blue-600 transition-all duration-300 group {{ request()->routeIs('publications*') ? 'text-blue-600' : '' }}">
                        Издания
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 transform {{ request()->routeIs('publications*') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="{{ route('membership') }}" class="relative px-4 py-4 text-sm font-semibold text-slate-700 hover:text-blue-600 transition-all duration-300 group {{ request()->routeIs('membership*') ? 'text-blue-600' : '' }}">
                        Членство
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 transform {{ request()->routeIs('membership*') ? 'scale-x-100' : 'scale-x-0' }} group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/10 to-purple-600/10"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 gradient-bg rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                            <span class="text-white font-bold text-lg">РАЧ</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">РАЧ</h3>
                            <p class="text-slate-400 text-sm font-medium">Российская Ассоциация Челюстно-лицевых хирургов</p>
                        </div>
                    </div>
                    <p class="text-slate-300 mb-6 leading-relaxed">
                        Профессиональное объединение специалистов в области челюстно-лицевой хирургии, 
                        способствующее развитию медицинской науки и практики.
                    </p>
                    <div class="flex space-x-4">
                        <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-white/20 transition-colors cursor-pointer">
                            <span class="text-sm">📧</span>
                        </div>
                        <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-white/20 transition-colors cursor-pointer">
                            <span class="text-sm">📱</span>
                        </div>
                        <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-white/20 transition-colors cursor-pointer">
                            <span class="text-sm">🌐</span>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white">Разделы</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors duration-300 font-medium">О нас</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors duration-300 font-medium">Новости</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors duration-300 font-medium">Мероприятия</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors duration-300 font-medium">Конференции</a></li>
                        <li><a href="#" class="text-slate-400 hover:text-white transition-colors duration-300 font-medium">Издания</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white">Контакты</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center text-slate-300">
                            <span class="mr-3">📞</span>
                            <span class="font-medium">+7 (495) 123-45-67</span>
                        </li>
                        <li class="flex items-center text-slate-300">
                            <span class="mr-3">✉️</span>
                            <span class="font-medium">info@rach.ru</span>
                        </li>
                        <li class="flex items-center text-slate-300">
                            <span class="mr-3">📍</span>
                            <span class="font-medium">Москва, Россия</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-slate-700/50 mt-12 pt-8 text-center">
                <p class="text-slate-400 font-medium">&copy; {{ date('Y') }} РАЧ - Российская Ассоциация Челюстно-лицевых хирургов. Все права защищены.</p>
            </div>
        </div>
    </footer>
</body>
</html>