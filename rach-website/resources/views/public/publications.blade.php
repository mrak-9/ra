<x-modern-layout>
    <x-slot name="title">Наши издания</x-slot>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Наши издания
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Научные публикации, статьи и издания в области челюстно-лицевой хирургии
                </p>
            </div>
        </div>
    </section>

    <!-- Publications Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($publications->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($publications as $publication)
                    <article class="bg-white rounded-3xl shadow-lg overflow-hidden card-hover group">
                        @if($publication->image)
                            <div class="relative overflow-hidden">
                                <img src="{{ asset('storage/' . $publication->image) }}" alt="{{ $publication->title }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                            </div>
                        @else
                            <div class="bg-gradient-to-br from-blue-500 to-purple-600 h-64 flex items-center justify-center relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                                <div class="text-white text-6xl opacity-20">📚</div>
                            </div>
                        @endif
                        
                        <div class="p-8">
                            <div class="flex items-center mb-4">
                                <div class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    Издание
                                </div>
                                <div class="text-sm text-slate-500 ml-auto font-medium">
                                    {{ $publication->published_at->format('d.m.Y') }}
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-slate-800 mb-4 group-hover:text-blue-600 transition-colors duration-300">
                                {{ $publication->title }}
                            </h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">
                                {{ $publication->short_description }}
                            </p>
                            <a href="{{ route('publications.show', $publication) }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold group-hover:translate-x-2 transition-all duration-300">
                                Подробнее
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-16">
                    {{ $publications->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <div class="text-6xl mb-6">📚</div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Издания пока не добавлены</h3>
                    <p class="text-slate-600 text-lg">Научные публикации и издания будут добавлены в ближайшее время</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Info Section -->
    @guest
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-3xl p-8 md:p-12">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-2xl">🔒</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4">Доступ к изданиям</h3>
                <p class="text-slate-600 mb-8 text-lg">
                    Полный доступ к научным изданиям и публикациям доступен только членам ассоциации. 
                    Зарегистрируйтесь и оплатите членский взнос для получения доступа ко всем материалам.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('register') }}" class="bg-gradient-to-r from-orange-600 to-red-600 hover:from-orange-700 hover:to-red-700 text-white px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 shadow-lg">
                        Стать членом РАЧ
                    </a>
                    <a href="{{ route('login') }}" class="border-2 border-orange-500 text-orange-600 hover:bg-orange-500 hover:text-white px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105">
                        Войти в систему
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endguest
</x-modern-layout>