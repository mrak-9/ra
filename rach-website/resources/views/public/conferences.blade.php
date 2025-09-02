<x-modern-layout>
    <x-slot name="title">Конференции и семинары</x-slot>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Конференции и семинары
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Профессиональные мероприятия для развития навыков и обмена опытом в области челюстно-лицевой хирургии
                </p>
            </div>
        </div>
    </section>

    <!-- Current Conference Section -->
    @if($currentConference)
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent mb-6">
                    Текущее мероприятие
                </h2>
            </div>

            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-8 md:p-12 shadow-xl border border-green-200">
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between">
                    <div class="flex-1 mb-8 lg:mb-0 lg:mr-8">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-4 py-2 rounded-2xl text-sm font-bold mr-4">
                                {{ $currentConference->conference_type }}
                            </div>
                            <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                                Регистрация открыта
                            </div>
                        </div>
                        <h3 class="text-3xl font-bold text-slate-800 mb-4">
                            {{ $currentConference->title }}
                        </h3>
                        <p class="text-slate-600 mb-6 leading-relaxed text-lg">
                            {{ $currentConference->announcement }}
                        </p>
                        <div class="flex flex-wrap gap-4 mb-6">
                            <div class="flex items-center text-slate-600">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="font-semibold">{{ $currentConference->starts_at->format('d.m.Y') }}</span>
                            </div>
                            <div class="flex items-center text-slate-600">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="font-semibold">{{ $currentConference->location }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-4">
                        <a href="{{ route('conferences.show', $currentConference) }}" class="bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 shadow-lg text-center">
                            Подробнее
                        </a>
                        @auth
                        <button class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 shadow-lg">
                            Зарегистрироваться
                        </button>
                        @else
                        <a href="{{ route('login') }}" class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 shadow-lg text-center">
                            Войти для регистрации
                        </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Past Conferences Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent mb-6">
                    Прошедшие мероприятия
                </h2>
            </div>

            @if($pastConferences->count() > 0)
                @foreach($pastConferences as $year => $yearConferences)
                <div class="mb-16">
                    <h3 class="text-3xl font-bold text-slate-800 mb-8 text-center">{{ $year }} год</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach($yearConferences as $conference)
                        <div class="bg-gradient-to-br from-slate-50 to-blue-50 rounded-3xl p-8 shadow-lg card-hover">
                            <div class="flex items-center mb-4">
                                <div class="bg-gradient-to-r from-slate-500 to-slate-600 text-white px-3 py-1 rounded-full text-sm font-semibold mr-4">
                                    {{ $conference->conference_type }}
                                </div>
                                <div class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-sm font-semibold">
                                    Завершено
                                </div>
                            </div>
                            <h4 class="text-xl font-bold text-slate-800 mb-4">
                                {{ $conference->title }}
                            </h4>
                            <p class="text-slate-600 mb-6 leading-relaxed">
                                {{ Str::limit($conference->announcement, 150) }}
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-slate-600">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="font-semibold">{{ $conference->starts_at->format('d.m.Y') }}</span>
                                </div>
                                <a href="{{ route('conferences.show', $conference) }}" class="text-blue-600 hover:text-blue-700 font-semibold">
                                    Подробнее →
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            @else
                <div class="text-center py-16">
                    <div class="text-6xl mb-6">📅</div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Прошедшие мероприятия пока не добавлены</h3>
                    <p class="text-slate-600 text-lg">Информация о прошедших конференциях будет добавлена</p>
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-blue-800 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Не пропустите следующее мероприятие
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Подпишитесь на уведомления о новых конференциях и семинарах
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                @auth
                <a href="{{ route('dashboard') }}" class="bg-white hover:bg-gray-50 text-slate-800 px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 shadow-xl">
                    Личный кабинет
                </a>
                @else
                <a href="{{ route('register') }}" class="bg-white hover:bg-gray-50 text-slate-800 px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 shadow-xl">
                    Зарегистрироваться
                </a>
                @endauth
            </div>
        </div>
    </section>
</x-modern-layout>