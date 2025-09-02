<x-modern-layout>
    <x-slot name="title">Международное сотрудничество</x-slot>

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
                    Международное сотрудничество
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Партнерство с ведущими зарубежными организациями в области челюстно-лицевой хирургии
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
                        <h2 class="text-3xl font-bold text-slate-800 mb-6">Международные партнеры</h2>
                        
                        <p class="text-lg text-slate-600 leading-relaxed mb-8">
                            Российская Ассоциация Челюстно-лицевых хирургов активно развивает международное сотрудничество 
                            с ведущими профессиональными организациями мира.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-xl flex items-center justify-center mb-4">
                                    <span class="text-white text-xl">🇪🇺</span>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Европейские партнеры</h3>
                                <ul class="text-slate-600 space-y-2">
                                    <li>• Европейская ассоциация челюстно-лицевых хирургов (EACMFS)</li>
                                    <li>• Немецкое общество челюстно-лицевой хирургии</li>
                                    <li>• Французская ассоциация стоматологов</li>
                                </ul>
                            </div>

                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-4">
                                    <span class="text-white text-xl">🇺🇸</span>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Американские партнеры</h3>
                                <ul class="text-slate-600 space-y-2">
                                    <li>• Американская ассоциация челюстно-лицевых хирургов (AAOMS)</li>
                                    <li>• Международная ассоциация стоматологов</li>
                                    <li>• Канадское общество челюстно-лицевой хирургии</li>
                                </ul>
                            </div>

                            <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center mb-4">
                                    <span class="text-white text-xl">🌏</span>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Азиатские партнеры</h3>
                                <ul class="text-slate-600 space-y-2">
                                    <li>• Азиатская ассоциация челюстно-лицевых хирургов</li>
                                    <li>• Японское общество стоматологов</li>
                                    <li>• Корейская ассоциация челюстно-лицевой хирургии</li>
                                </ul>
                            </div>

                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-4">
                                    <span class="text-white text-xl">🌍</span>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Международные организации</h3>
                                <ul class="text-slate-600 space-y-2">
                                    <li>• Всемирная организация здравоохранения (ВОЗ)</li>
                                    <li>• Международная федация стоматологов (FDI)</li>
                                    <li>• Международная ассоциация челюстно-лицевых хирургов</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="text-2xl font-bold text-slate-800 mb-6">Направления сотрудничества</h3>
                        
                        <div class="space-y-6 mb-8">
                            <div class="border-l-4 border-blue-500 pl-6">
                                <h4 class="text-lg font-semibold text-slate-800 mb-2">Обмен опытом</h4>
                                <p class="text-slate-600">
                                    Участие в международных конференциях, семинарах и мастер-классах. 
                                    Обмен специалистами и стажировки в ведущих клиниках мира.
                                </p>
                            </div>

                            <div class="border-l-4 border-green-500 pl-6">
                                <h4 class="text-lg font-semibold text-slate-800 mb-2">Научные исследования</h4>
                                <p class="text-slate-600">
                                    Совместные научные проекты, публикации в международных журналах, 
                                    участие в многоцентровых исследованиях.
                                </p>
                            </div>

                            <div class="border-l-4 border-purple-500 pl-6">
                                <h4 class="text-lg font-semibold text-slate-800 mb-2">Образовательные программы</h4>
                                <p class="text-slate-600">
                                    Разработка совместных образовательных курсов, программ сертификации 
                                    и повышения квалификации специалистов.
                                </p>
                            </div>

                            <div class="border-l-4 border-orange-500 pl-6">
                                <h4 class="text-lg font-semibold text-slate-800 mb-2">Стандартизация</h4>
                                <p class="text-slate-600">
                                    Участие в разработке международных стандартов лечения, 
                                    клинических рекомендаций и протоколов.
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8">
                            <h3 class="text-2xl font-bold text-slate-800 mb-4">Международные мероприятия</h3>
                            <p class="text-slate-600 mb-6">
                                РАЧ регулярно организует и участвует в международных конференциях, 
                                симпозиумах и образовательных мероприятиях.
                            </p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="bg-white rounded-xl p-4">
                                    <h4 class="font-semibold text-slate-800 mb-2">Ежегодные конференции</h4>
                                    <p class="text-slate-600 text-sm">Международные научно-практические конференции</p>
                                </div>
                                <div class="bg-white rounded-xl p-4">
                                    <h4 class="font-semibold text-slate-800 mb-2">Мастер-классы</h4>
                                    <p class="text-slate-600 text-sm">Практические занятия с зарубежными экспертами</p>
                                </div>
                                <div class="bg-white rounded-xl p-4">
                                    <h4 class="font-semibold text-slate-800 mb-2">Стажировки</h4>
                                    <p class="text-slate-600 text-sm">Обучение в ведущих зарубежных клиниках</p>
                                </div>
                                <div class="bg-white rounded-xl p-4">
                                    <h4 class="font-semibold text-slate-800 mb-2">Телемедицина</h4>
                                    <p class="text-slate-600 text-sm">Онлайн консультации и дистанционное обучение</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</x-modern-layout>