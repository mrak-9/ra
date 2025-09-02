<x-main-layout>
    <x-slot name="title">Главная - РАЧ</x-slot>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Российская Ассоциация<br>
                    Челюстно-лицевых хирургов
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100">
                    Профессиональное объединение специалистов в области челюстно-лицевой хирургии
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-150 ease-in-out">
                        Стать членом РАЧ
                    </a>
                    <a href="#" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-150 ease-in-out">
                        Наши мероприятия
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">О нашей ассоциации</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Российская Ассоциация Челюстно-лицевых хирургов объединяет ведущих специалистов в области челюстно-лицевой хирургии, стоматологии и смежных дисциплин.
                    </p>
                    <p class="text-lg text-gray-600 mb-6">
                        Наша миссия - развитие профессиональных компетенций, обмен опытом и внедрение современных технологий в практику челюстно-лицевой хирургии.
                    </p>
                    <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold">
                        Узнать больше
                        <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="bg-gray-200 rounded-lg h-96 flex items-center justify-center">
                    <p class="text-gray-500">Изображение о РАЧ</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Последние новости</h2>
                <p class="text-lg text-gray-600">Актуальная информация о деятельности ассоциации</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($latestNews as $news)
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-150 ease-in-out">
                    @if($news->image)
                        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-48 object-cover">
                    @else
                        <div class="bg-gray-200 h-48 flex items-center justify-center">
                            <p class="text-gray-500">Изображение новости</p>
                        </div>
                    @endif
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">{{ $news->published_at->format('d.m.Y') }}</div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">
                            {{ $news->title }}
                        </h3>
                        <p class="text-gray-600 mb-4">
                            {{ $news->excerpt }}
                        </p>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">
                            Читать далее →
                        </a>
                    </div>
                </article>
                @empty
                <div class="col-span-3 text-center py-8">
                    <p class="text-gray-500">Новости пока не добавлены</p>
                </div>
                @endforelse
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-150 ease-in-out">
                    Все новости
                </a>
            </div>
        </div>
    </section>

    <!-- Upcoming Events -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Предстоящие мероприятия</h2>
                <p class="text-lg text-gray-600">Конференции, семинары и другие профессиональные мероприятия</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @forelse($upcomingConferences as $conference)
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition duration-150 ease-in-out">
                    <div class="flex items-start justify-between mb-4">
                        <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $conference->conference_type }}
                        </div>
                        <div class="text-right text-sm text-gray-500">
                            {{ $conference->starts_at->format('d.m.Y') }}
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">
                        {{ $conference->title }}
                    </h3>
                    <p class="text-gray-600 mb-4">
                        {{ $conference->announcement }}
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">
                            📍 {{ $conference->location }}
                        </span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">
                            Подробнее →
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-2 text-center py-8">
                    <p class="text-gray-500">Предстоящие мероприятия пока не запланированы</p>
                </div>
                @endforelse
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-150 ease-in-out">
                    Все мероприятия
                </a>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2">500+</div>
                    <div class="text-blue-100">Членов ассоциации</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">50+</div>
                    <div class="text-blue-100">Отделений по России</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">25+</div>
                    <div class="text-blue-100">Лет опыта</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">100+</div>
                    <div class="text-blue-100">Мероприятий в год</div>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>