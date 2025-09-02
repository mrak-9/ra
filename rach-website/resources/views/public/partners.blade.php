<x-modern-layout>
    <x-slot name="title">Партнеры</x-slot>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Партнеры
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Наши надежные партнеры и спонсоры, поддерживающие развитие челюстно-лицевой хирургии
                </p>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($partners->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($partners as $partner)
                    <div class="bg-white rounded-3xl shadow-lg overflow-hidden card-hover group">
                        @if($partner->image)
                            <div class="relative overflow-hidden h-48">
                                <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->name }}" class="w-full h-full object-contain p-6 group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                            </div>
                        @else
                            <div class="bg-gradient-to-br from-blue-500 to-purple-600 h-48 flex items-center justify-center relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                                <div class="text-white text-6xl opacity-20">🤝</div>
                            </div>
                        @endif
                        
                        <div class="p-8">
                            <h3 class="text-xl font-bold text-slate-800 mb-4 group-hover:text-blue-600 transition-colors duration-300">
                                {{ $partner->name }}
                            </h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">
                                {{ $partner->short_description }}
                            </p>
                            <div class="flex items-center justify-between">
                                <a href="{{ route('partners.show', $partner) }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold group-hover:translate-x-2 transition-all duration-300">
                                    Подробнее
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                @if($partner->website_url)
                                <a href="{{ $partner->website_url }}" target="_blank" class="text-slate-400 hover:text-slate-600 transition-colors duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-16">
                    <div class="text-6xl mb-6">🤝</div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Партнеры пока не добавлены</h3>
                    <p class="text-slate-600 text-lg">Информация о партнерах ассоциации будет добавлена в ближайшее время</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Partnership Types Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent mb-6">
                    Виды партнерства
                </h2>
                <p class="text-xl text-slate-600 max-w-3xl mx-auto">
                    Мы предлагаем различные формы сотрудничества для развития челюстно-лицевой хирургии
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-3xl p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl">🏥</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Медицинские учреждения</h3>
                    <p class="text-slate-600">Клиники, больницы и медицинские центры</p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl">🏭</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Производители</h3>
                    <p class="text-slate-600">Компании-производители медицинского оборудования</p>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-3xl p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl">🎓</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Образовательные учреждения</h3>
                    <p class="text-slate-600">Университеты и институты медицинского профиля</p>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl">💼</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Коммерческие партнеры</h3>
                    <p class="text-slate-600">Спонсоры мероприятий и проектов</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-blue-800 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Станьте нашим партнером
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Присоединяйтесь к нашему сообществу и поддержите развитие челюстно-лицевой хирургии в России
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:partnership@rach.ru" class="bg-white hover:bg-gray-50 text-slate-800 px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 shadow-xl">
                    Стать партнером
                </a>
                <a href="tel:+7-495-123-45-67" class="border-2 border-white text-white hover:bg-white hover:text-slate-800 px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105">
                    Связаться с нами
                </a>
            </div>
        </div>
    </section>
</x-modern-layout>