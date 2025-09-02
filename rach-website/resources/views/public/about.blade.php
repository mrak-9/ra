<x-modern-layout>
    <x-slot name="title">О нас</x-slot>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    О нас
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Российская Ассоциация Челюстно-лицевых хирургов - профессиональное объединение специалистов
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
                        <h2 class="text-3xl font-bold text-slate-800 mb-6">О Российской Ассоциации Челюстно-лицевых хирургов</h2>
                        
                        <p class="text-lg text-slate-600 leading-relaxed mb-6">
                            Российская Ассоциация Челюстно-лицевых хирургов (РАЧ) является ведущей профессиональной организацией, 
                            объединяющей специалистов в области челюстно-лицевой хирургии на территории Российской Федерации.
                        </p>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">Наша миссия</h3>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            Способствовать развитию челюстно-лицевой хирургии в России, повышению квалификации специалистов, 
                            обмену опытом и внедрению современных методов лечения для улучшения качества медицинской помощи пациентам.
                        </p>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">Основные направления деятельности</h3>
                        <ul class="list-disc list-inside text-slate-600 space-y-2 mb-6">
                            <li>Организация научно-практических конференций и семинаров</li>
                            <li>Проведение образовательных программ и курсов повышения квалификации</li>
                            <li>Разработка клинических рекомендаций и стандартов лечения</li>
                            <li>Координация научных исследований в области челюстно-лицевой хирургии</li>
                            <li>Международное сотрудничество с зарубежными коллегами</li>
                            <li>Издание научной литературы и профессиональных публикаций</li>
                        </ul>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">История ассоциации</h3>
                        <p class="text-slate-600 leading-relaxed mb-6">
                            Ассоциация была основана с целью объединения усилий специалистов для развития отечественной 
                            челюстно-лицевой хирургии. За годы работы РАЧ стала признанным лидером в области профессионального 
                            образования и научных исследований.
                        </p>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">Членство в ассоциации</h3>
                        <p class="text-slate-600 leading-relaxed">
                            Членами ассоциации могут стать врачи-специалисты, работающие в области челюстно-лицевой хирургии, 
                            стоматологии, онкологии и смежных специальностей. Членство предоставляет доступ к эксклюзивным 
                            образовательным программам, научным материалам и профессиональному сообществу.
                        </p>
                    </div>
                </div>
            @endif

            <!-- Submenu -->
            <div class="mt-12">
                <h3 class="text-2xl font-bold text-slate-800 mb-6 text-center">Дополнительная информация</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <a href="{{ route('media-about-us') }}" class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">📺</span>
                        </div>
                        <h4 class="text-lg font-bold text-slate-800 mb-2">СМИ о нас</h4>
                        <p class="text-slate-600">Публикации в СМИ о деятельности ассоциации</p>
                    </a>

                    <a href="{{ route('international-cooperation') }}" class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">🌍</span>
                        </div>
                        <h4 class="text-lg font-bold text-slate-800 mb-2">Международное сотрудничество</h4>
                        <p class="text-slate-600">Партнерство с зарубежными организациями</p>
                    </a>

                    <a href="{{ route('public-offer') }}" class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">📄</span>
                        </div>
                        <h4 class="text-lg font-bold text-slate-800 mb-2">Публичная оферта</h4>
                        <p class="text-slate-600">Условия предоставления услуг</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-modern-layout>