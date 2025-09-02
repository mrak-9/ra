<x-modern-layout>
    <x-slot name="title">Членство в РАЧ</x-slot>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Членство в РАЧ
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Присоединяйтесь к профессиональному сообществу челюстно-лицевых хирургов России
                </p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($page && $page->content)
                <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-12">
                    <div class="prose prose-lg max-w-none">
                        {!! $page->content !!}
                    </div>
                </div>
            @else
                <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-12">
                    <div class="prose prose-lg max-w-none">
                        <h2 class="text-3xl font-bold text-slate-800 mb-6">Преимущества членства в РАЧ</h2>
                        
                        <p class="text-lg text-slate-600 leading-relaxed mb-8">
                            Членство в Российской Ассоциации Челюстно-лицевых хирургов открывает перед вами широкие возможности 
                            для профессионального развития и карьерного роста.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-xl flex items-center justify-center mb-4">
                                    <span class="text-white text-xl">🎓</span>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Образование</h3>
                                <p class="text-slate-600">Доступ к эксклюзивным образовательным программам, курсам повышения квалификации и сертификации</p>
                            </div>

                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-4">
                                    <span class="text-white text-xl">🤝</span>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Сообщество</h3>
                                <p class="text-slate-600">Общение с коллегами, обмен опытом и профессиональное развитие в кругу единомышленников</p>
                            </div>

                            <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center mb-4">
                                    <span class="text-white text-xl">📚</span>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Ресурсы</h3>
                                <p class="text-slate-600">Доступ к научным публикациям, исследованиям и профессиональной литературе</p>
                            </div>

                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-4">
                                    <span class="text-white text-xl">🏆</span>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3">Признание</h3>
                                <p class="text-slate-600">Участие в профессиональных конкурсах, получение наград и признания в сообществе</p>
                            </div>
                        </div>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">Типы членства</h3>
                        <div class="space-y-4 mb-8">
                            <div class="border-l-4 border-blue-500 pl-6">
                                <h4 class="text-lg font-semibold text-slate-800 mb-2">Индивидуальное членство</h4>
                                <p class="text-slate-600">Для врачей-специалистов, работающих в области челюстно-лицевой хирургии</p>
                            </div>
                            <div class="border-l-4 border-green-500 pl-6">
                                <h4 class="text-lg font-semibold text-slate-800 mb-2">Корпоративное членство</h4>
                                <p class="text-slate-600">Для медицинских учреждений и организаций</p>
                            </div>
                        </div>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">Требования к членству</h3>
                        <ul class="list-disc list-inside text-slate-600 space-y-2 mb-8">
                            <li>Высшее медицинское образование</li>
                            <li>Специализация в области челюстно-лицевой хирургии или смежных специальностей</li>
                            <li>Действующий сертификат специалиста</li>
                            <li>Рекомендации от двух действующих членов ассоциации (для индивидуального членства)</li>
                        </ul>
                    </div>
                </div>
            @endif

            <!-- CTA Section -->
            <div class="bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800 rounded-3xl p-8 md:p-12 text-center text-white relative overflow-hidden">
                <div class="absolute inset-0 bg-black/20 rounded-3xl"></div>
                <div class="relative">
                    <h3 class="text-3xl font-bold mb-6">Готовы стать членом РАЧ?</h3>
                    <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                        Присоединяйтесь к нашему профессиональному сообществу и получите доступ ко всем преимуществам членства
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        @auth
                            <a href="{{ route('dashboard') }}" class="bg-white hover:bg-gray-50 text-slate-800 px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 shadow-xl">
                                Перейти в личный кабинет
                            </a>
                        @else
                            <a href="{{ route('register') }}" class="bg-white hover:bg-gray-50 text-slate-800 px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 shadow-xl">
                                Зарегистрироваться
                            </a>
                            <a href="{{ route('login') }}" class="border-2 border-white text-white hover:bg-white hover:text-slate-800 px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105">
                                Войти в систему
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-modern-layout>