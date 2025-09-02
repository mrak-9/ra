<x-modern-layout>
    <x-slot name="title">Публичная оферта</x-slot>

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
                    Публичная оферта
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Условия предоставления услуг и членства в ассоциации
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
                        <h2 class="text-3xl font-bold text-slate-800 mb-6">Публичная оферта</h2>
                        <p class="text-sm text-slate-500 mb-8">Действует с 01.01.2025</p>
                        
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-2xl mb-8">
                            <p class="text-slate-700 font-medium">
                                Настоящая публичная оферта определяет условия предоставления услуг 
                                Российской Ассоциацией Челюстно-лицевых хирургов (далее - "Ассоциация").
                            </p>
                        </div>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">1. Общие положения</h3>
                        <p class="text-slate-600 mb-6">
                            1.1. Настоящая публичная оферта (далее - "Оферта") является официальным предложением 
                            Ассоциации о заключении договора на оказание услуг.
                        </p>
                        <p class="text-slate-600 mb-6">
                            1.2. Акцептом настоящей Оферты является регистрация на сайте и/или оплата членского взноса.
                        </p>
                        <p class="text-slate-600 mb-8">
                            1.3. Ассоциация вправе изменять условия настоящей Оферты в одностороннем порядке 
                            с уведомлением пользователей на сайте.
                        </p>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">2. Предмет договора</h3>
                        <p class="text-slate-600 mb-4">
                            2.1. Ассоциация предоставляет следующие услуги:
                        </p>
                        <ul class="list-disc list-inside text-slate-600 space-y-2 mb-8 ml-4">
                            <li>Организация и проведение научно-практических конференций</li>
                            <li>Образовательные программы и курсы повышения квалификации</li>
                            <li>Предоставление доступа к научным материалам и публикациям</li>
                            <li>Консультационные услуги по профессиональным вопросам</li>
                            <li>Сертификация специалистов</li>
                        </ul>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">3. Стоимость услуг</h3>
                        <div class="bg-green-50 rounded-2xl p-6 mb-8">
                            <h4 class="text-lg font-semibold text-slate-800 mb-4">Членские взносы:</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-white rounded-xl p-4">
                                    <h5 class="font-semibold text-slate-800 mb-2">Индивидуальное членство</h5>
                                    <p class="text-2xl font-bold text-green-600 mb-2">5 000 ₽</p>
                                    <p class="text-slate-600 text-sm">в год</p>
                                </div>
                                <div class="bg-white rounded-xl p-4">
                                    <h5 class="font-semibold text-slate-800 mb-2">Корпоративное членство</h5>
                                    <p class="text-2xl font-bold text-green-600 mb-2">25 000 ₽</p>
                                    <p class="text-slate-600 text-sm">в год</p>
                                </div>
                            </div>
                        </div>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">4. Порядок оплаты</h3>
                        <p class="text-slate-600 mb-4">
                            4.1. Оплата производится в российских рублях.
                        </p>
                        <p class="text-slate-600 mb-4">
                            4.2. Доступные способы оплаты:
                        </p>
                        <ul class="list-disc list-inside text-slate-600 space-y-2 mb-6 ml-4">
                            <li>Банковские карты (Visa, MasterCard, МИР)</li>
                            <li>Электронные кошельки</li>
                            <li>Банковский перевод</li>
                            <li>Система быстрых платежей (СБП)</li>
                        </ul>
                        <p class="text-slate-600 mb-8">
                            4.3. Членский взнос оплачивается ежегодно и не подлежит возврату.
                        </p>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">5. Права и обязанности сторон</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                            <div>
                                <h4 class="text-lg font-semibold text-slate-800 mb-4">Права Ассоциации:</h4>
                                <ul class="list-disc list-inside text-slate-600 space-y-2">
                                    <li>Изменять условия предоставления услуг</li>
                                    <li>Приостанавливать предоставление услуг при нарушении условий</li>
                                    <li>Требовать своевременной оплаты услуг</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-slate-800 mb-4">Обязанности Ассоциации:</h4>
                                <ul class="list-disc list-inside text-slate-600 space-y-2">
                                    <li>Предоставлять услуги в соответствии с договором</li>
                                    <li>Обеспечивать конфиденциальность данных</li>
                                    <li>Уведомлять об изменениях условий</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">6. Ответственность</h3>
                        <p class="text-slate-600 mb-6">
                            6.1. Ассоциация не несет ответственности за временные технические сбои в работе сайта.
                        </p>
                        <p class="text-slate-600 mb-8">
                            6.2. Пользователь несет ответственность за достоверность предоставленных данных.
                        </p>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">7. Конфиденциальность</h3>
                        <p class="text-slate-600 mb-6">
                            7.1. Ассоциация обязуется не разглашать персональные данные пользователей третьим лицам.
                        </p>
                        <p class="text-slate-600 mb-8">
                            7.2. Обработка персональных данных осуществляется в соответствии с ФЗ "О персональных данных".
                        </p>

                        <h3 class="text-2xl font-bold text-slate-800 mb-4">8. Заключительные положения</h3>
                        <p class="text-slate-600 mb-6">
                            8.1. Настоящая Оферта регулируется законодательством Российской Федерации.
                        </p>
                        <p class="text-slate-600 mb-8">
                            8.2. Все споры решаются путем переговоров, а при их безрезультатности - в судебном порядке.
                        </p>

                        <div class="bg-slate-50 rounded-2xl p-6">
                            <h4 class="text-lg font-semibold text-slate-800 mb-4">Контактная информация:</h4>
                            <div class="space-y-2 text-slate-600">
                                <p><strong>Российская Ассоциация Челюстно-лицевых хирургов</strong></p>
                                <p>Адрес: г. Москва, ул. Примерная, д. 1</p>
                                <p>Телефон: +7 (495) 123-45-67</p>
                                <p>Email: info@rach.ru</p>
                                <p>Сайт: www.rach.ru</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</x-modern-layout>