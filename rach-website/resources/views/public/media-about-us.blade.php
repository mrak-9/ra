<x-modern-layout>
    <x-slot name="title">СМИ о нас</x-slot>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <div class="mb-6">
                    <a href="{{ route('about') }}" class="inline-flex items-center text-white/80 hover:text-white transition-colors duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        О нас
                    </a>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    СМИ о нас
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Публикации в средствах массовой информации о деятельности ассоциации
                </p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($page && $page->content)
                <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12">
                    <div class="prose prose-lg max-w-none">
                        {!! $page->content !!}
                    </div>
                </div>
            @else
                <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12">
                    <div class="prose prose-lg max-w-none">
                        <h2 class="text-3xl font-bold text-slate-800 mb-6">СМИ о деятельности РАЧ</h2>
                        
                        <p class="text-lg text-slate-600 leading-relaxed mb-8">
                            Российская Ассоциация Челюстно-лицевых хирургов регулярно освещается в профессиональных 
                            и общественных средствах массовой информации.
                        </p>

                        <div class="space-y-8">
                            <div class="border-l-4 border-blue-500 pl-6 bg-blue-50 p-6 rounded-r-2xl">
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Профессиональные издания</h3>
                                <p class="text-slate-600 mb-4">
                                    Наша деятельность освещается в ведущих медицинских журналах и профессиональных изданиях:
                                </p>
                                <ul class="list-disc list-inside text-slate-600 space-y-2">
                                    <li>Журнал "Челюстно-лицевая хирургия"</li>
                                    <li>Медицинский вестник</li>
                                    <li>Стоматология сегодня</li>
                                    <li>Российский стоматологический журнал</li>
                                </ul>
                            </div>

                            <div class="border-l-4 border-green-500 pl-6 bg-green-50 p-6 rounded-r-2xl">
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Интернет-ресурсы</h3>
                                <p class="text-slate-600 mb-4">
                                    Информация о наших мероприятиях и достижениях публикуется на специализированных порталах:
                                </p>
                                <ul class="list-disc list-inside text-slate-600 space-y-2">
                                    <li>Портал "Медицина России"</li>
                                    <li>Сайт Минздрава РФ</li>
                                    <li>Профессиональные медицинские форумы</li>
                                    <li>Социальные сети и блоги специалистов</li>
                                </ul>
                            </div>

                            <div class="border-l-4 border-purple-500 pl-6 bg-purple-50 p-6 rounded-r-2xl">
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Конференции и мероприятия</h3>
                                <p class="text-slate-600 mb-4">
                                    Освещение наших конференций и семинаров в СМИ способствует популяризации 
                                    челюстно-лицевой хирургии и привлечению внимания к важным проблемам отрасли.
                                </p>
                            </div>
                        </div>

                        <div class="mt-12 bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8">
                            <h3 class="text-2xl font-bold text-slate-800 mb-4">Для журналистов</h3>
                            <p class="text-slate-600 mb-6">
                                Если вы представитель СМИ и хотите получить информацию о деятельности ассоциации, 
                                обращайтесь в наш пресс-центр.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="mailto:press@rach.ru" class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-6 py-3 rounded-2xl font-semibold transition-all duration-300 hover:scale-105 text-center">
                                    Связаться с пресс-службой
                                </a>
                                <a href="tel:+7-495-123-45-67" class="border-2 border-blue-500 text-blue-600 hover:bg-blue-500 hover:text-white px-6 py-3 rounded-2xl font-semibold transition-all duration-300 hover:scale-105 text-center">
                                    +7 (495) 123-45-67
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</x-modern-layout>