<x-modern-layout>
    <x-slot name="title">Наши проекты</x-slot>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Наши проекты
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Инновационные проекты и инициативы в области челюстно-лицевой хирургии
                </p>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($projects->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach($projects as $project)
                    <article class="bg-white rounded-3xl shadow-lg overflow-hidden card-hover group">
                        <div class="bg-gradient-to-br from-green-500 to-emerald-600 h-48 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                            <div class="text-white text-6xl opacity-20">🚀</div>
                            <div class="absolute bottom-4 left-4 right-4">
                                <h3 class="text-xl font-bold text-white">{{ $project->name }}</h3>
                            </div>
                        </div>
                        
                        <div class="p-8">
                            <div class="mb-6">
                                <p class="text-slate-600 leading-relaxed">
                                    {{ $project->short_description }}
                                </p>
                            </div>

                            @if($project->testing_info)
                            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-4 mb-6">
                                <h4 class="text-sm font-semibold text-slate-800 mb-2 flex items-center">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                    Апробация
                                </h4>
                                <p class="text-slate-600 text-sm">{{ $project->testing_info }}</p>
                            </div>
                            @endif

                            <a href="{{ route('projects.show', $project) }}" class="inline-flex items-center text-green-600 hover:text-green-700 font-semibold group-hover:translate-x-2 transition-all duration-300">
                                Подробнее о проекте
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
                    {{ $projects->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <div class="text-6xl mb-6">🚀</div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Проекты пока не добавлены</h3>
                    <p class="text-slate-600 text-lg">Информация о проектах ассоциации будет добавлена в ближайшее время</p>
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-green-600 via-emerald-600 to-green-800 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Есть идея для проекта?
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Предложите свой проект для реализации в рамках деятельности ассоциации
            </p>
            <a href="mailto:projects@rach.ru" class="bg-white hover:bg-gray-50 text-slate-800 px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 shadow-xl">
                Предложить проект
            </a>
        </div>
    </section>
</x-modern-layout>