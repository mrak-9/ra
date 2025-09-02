<x-modern-layout>
    <x-slot name="title">{{ $news->title }}</x-slot>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-6">
                    <a href="{{ route('news') }}" class="inline-flex items-center text-white/80 hover:text-white transition-colors duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Вернуться к новостям
                    </a>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    {{ $news->title }}
                </h1>
                <div class="flex items-center justify-center space-x-6 text-white/90">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        {{ $news->published_at->format('d.m.Y') }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <article class="bg-white rounded-3xl shadow-lg overflow-hidden">
                @if($news->image)
                    <div class="relative">
                        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-96 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                @endif
                
                <div class="p-8 md:p-12">
                    <div class="prose prose-lg max-w-none">
                        <div class="text-xl text-slate-600 leading-relaxed mb-8 font-medium">
                            {{ $news->excerpt }}
                        </div>
                        
                        <div class="text-slate-700 leading-relaxed">
                            {!! nl2br(e($news->content)) !!}
                        </div>
                    </div>
                </div>
            </article>

            <!-- Navigation -->
            <div class="mt-12 flex justify-between items-center">
                <a href="{{ route('news') }}" class="inline-flex items-center bg-white hover:bg-gray-50 text-slate-800 px-6 py-3 rounded-2xl font-semibold transition-all duration-300 hover:scale-105 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Все новости
                </a>
                
                <div class="flex space-x-4">
                    <button onclick="window.print()" class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-6 py-3 rounded-2xl font-semibold transition-all duration-300 hover:scale-105 shadow-lg">
                        Печать
                    </button>
                    <button onclick="navigator.share ? navigator.share({title: '{{ $news->title }}', url: window.location.href}) : alert('Поделиться: ' + window.location.href)" class="bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white px-6 py-3 rounded-2xl font-semibold transition-all duration-300 hover:scale-105 shadow-lg">
                        Поделиться
                    </button>
                </div>
            </div>
        </div>
    </section>
</x-modern-layout>