<x-modern-layout>
    <x-slot name="title">Мероприятия</x-slot>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Мероприятия
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Фотоотчеты и материалы с прошедших мероприятий ассоциации
                </p>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Placeholder for file-based events -->
            <div class="text-center py-16">
                <div class="text-6xl mb-6">📸</div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Мероприятия будут добавлены</h3>
                <p class="text-slate-600 text-lg mb-8">
                    Здесь будут отображаться фотоотчеты и материалы с мероприятий, 
                    организованных на основе файловой системы согласно ТЗ
                </p>
                
                <div class="bg-white rounded-3xl shadow-lg p-8 max-w-2xl mx-auto">
                    <h4 class="text-xl font-bold text-slate-800 mb-4">Структура мероприятий</h4>
                    <div class="text-left space-y-2 text-slate-600">
                        <p>📁 Папка мероприятия (название = название мероприятия)</p>
                        <p class="ml-4">🖼️ Изображения (название = подпись к изображению)</p>
                        <p class="ml-4">📄 Файл описания (.txt)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-slate-800 mb-6">Как добавить мероприятие</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-xl">1</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-3">Создайте папку</h3>
                    <p class="text-slate-600">Создайте папку с названием мероприятия</p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-xl">2</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-3">Добавьте файлы</h3>
                    <p class="text-slate-600">Загрузите изображения и текстовый файл с описанием</p>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-xl">3</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-3">Готово</h3>
                    <p class="text-slate-600">Мероприятие автоматически появится на сайте</p>
                </div>
            </div>
        </div>
    </section>
</x-modern-layout>