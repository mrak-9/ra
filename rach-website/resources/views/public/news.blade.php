<x-modern-layout>
    <x-slot name="title">Новости</x-slot>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Новости
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Актуальная информация о деятельности ассоциации и важных событиях в области челюстно-лицевой хирургии
                </p>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($news->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($news as $item)
                    <article class="bg-white rounded-3xl shadow-lg overflow-hidden card-hover group">
                        @if($item->image)
                            <div class="relative overflow-hidden">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
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
                                    {{ $item->published_at->format('d.m.Y') }}
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-slate-800 mb-4 group-hover:text-blue-600 transition-colors duration-300">
                                {{ $item->title }}
                            </h3>
                            <p class="text-slate-600 mb-6 leading-relaxed">
                                {{ $item->excerpt }}
                            </p>
                            <a href="{{ route('news.show', $item) }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold group-hover:translate-x-2 transition-all duration-300">
                                Читать далее
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
                    {{ $news->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <div class="text-6xl mb-6">📰</div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Новости пока не добавлены</h3>
                    <p class="text-slate-600 text-lg">Следите за обновлениями на нашем сайте</p>
                </div>
            @endif
        </div>
    </section>
</x-modern-layout>