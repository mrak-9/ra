<x-modern-layout>
    <x-slot name="title">Главная</x-slot>

    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <div class="hero-gradient">
            <div class="absolute inset-0 bg-black/20"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
                <div class="text-center">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                        Российская Ассоциация
                        <span class="block bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent">
                            Челюстно-лицевых хирургов
                        </span>
                    </h1>
                    <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed">
                        Профессиональное объединение специалистов, способствующее развитию медицинской науки и практики
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#" class="bg-white hover:bg-gray-50 text-slate-800 px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 shadow-xl">
                            Стать членом РАЧ
                        </a>
                        <a href="#" class="border-2 border-white text-white hover:bg-white hover:text-slate-800 px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105">
                            Узнать больше
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Floating elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-white/10 rounded-full blur-xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white/10 rounded-full blur-xl animate-pulse delay-500"></div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white/50 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2">500+</div>
                    <div class="text-slate-600 font-semibold">Членов ассоциации</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2">50+</div>
                    <div class="text-slate-600 font-semibold">Региональных отделений</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2">25+</div>
                    <div class="text-slate-600 font-semibold">Лет опыта</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2">100+</div>
                    <div class="text-slate-600 font-semibold">Мероприятий в год</div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent mb-6">
                    Последние новости
                </h2>
                <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                    Актуальная информация о деятельности ассоциации и важных событиях в области челюстно-лицевой хирургии
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($latestNews as $news)
                <article class="bg-white rounded-3xl shadow-lg overflow-hidden card-hover group">
                    @if($news->image)
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        </div>
                    @else
                        <div class="bg-gradient-to-br from-blue-500 to-purple-600 h-64 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                            <div class="text-white text-6xl opacity-20">📰</div>
                        </div>
                    @endif
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                Новость
                            </div>
                            <div class="text-sm text-slate-500 ml-auto font-medium">
                                {{ $news->published_at->format('d.m.Y') }}
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-4 group-hover:text-blue-600 transition-colors duration-300">
                            {{ $news->title }}
                        </h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">
                            {{ $news->excerpt }}
                        </p>
                        <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold group-hover:translate-x-2 transition-all duration-300">
                            Читать далее
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                @empty
                <div class="col-span-3 text-center py-16">
                    <div class="text-6xl mb-4">📰</div>
                    <p class="text-slate-500 text-lg">Новости пока не добавлены</p>
                </div>
                @endforelse
            </div>
            
            <div class="text-center mt-16">
                <a href="#" class="gradient-bg hover:shadow-xl text-white px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 inline-flex items-center">
                    Все новости
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent mb-6">
                    Предстоящие мероприятия
                </h2>
                <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                    Конференции, семинары и другие профессиональные мероприятия для развития ваших навыков
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @forelse($upcomingConferences as $conference)
                <div class="bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 shadow-lg card-hover border border-blue-100">
                    <div class="flex items-start justify-between mb-6">
                        <div class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-4 py-2 rounded-2xl text-sm font-bold">
                            {{ $conference->conference_type }}
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-slate-800">
                                {{ $conference->starts_at->format('d') }}
                            </div>
                            <div class="text-sm text-slate-600 font-semibold">
                                {{ $conference->starts_at->format('M Y') }}
                            </div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4 leading-tight">
                        {{ $conference->title }}
                    </h3>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        {{ $conference->announcement }}
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-slate-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="font-semibold">{{ $conference->location }}</span>
                        </div>
                        <a href="#" class="bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 text-white px-6 py-3 rounded-2xl font-bold transition-all duration-300 hover:scale-105 shadow-lg">
                            Регистрация
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-2 text-center py-16">
                    <div class="text-6xl mb-4">📅</div>
                    <p class="text-slate-500 text-lg">Предстоящие мероприятия пока не запланированы</p>
                </div>
                @endforelse
            </div>
            
            <div class="text-center mt-16">
                <a href="#" class="gradient-bg hover:shadow-xl text-white px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 inline-flex items-center">
                    Все мероприятия
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent mb-6">
                    Преимущества членства
                </h2>
                <p class="text-xl text-slate-600 max-w-2xl mx-auto">
                    Присоединяйтесь к профессиональному сообществу и получите доступ к эксклюзивным возможностям
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-3xl p-8 shadow-lg card-hover text-center">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl">🎓</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Образование</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Доступ к эксклюзивным образовательным программам, мастер-классам и сертификации
                    </p>
                </div>
                
                <div class="bg-white rounded-3xl p-8 shadow-lg card-hover text-center">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl">🤝</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Сообщество</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Общение с коллегами, обмен опытом и профессиональное развитие в кругу единомышленников
                    </p>
                </div>
                
                <div class="bg-white rounded-3xl p-8 shadow-lg card-hover text-center">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl">📚</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Ресурсы</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Доступ к научным публикациям, исследованиям и профессиональной литературе
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-blue-800 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Готовы присоединиться к нам?
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Станьте частью профессионального сообщества и получите доступ ко всем преимуществам членства в РАЧ
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="bg-white hover:bg-gray-50 text-slate-800 px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 shadow-xl">
                    Стать членом
                </a>
                <a href="#" class="border-2 border-white text-white hover:bg-white hover:text-slate-800 px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105">
                    Узнать больше
                </a>
            </div>
        </div>
        
        <!-- Floating elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-white/10 rounded-full blur-xl animate-pulse delay-1000"></div>
    </section>
</x-modern-layout>