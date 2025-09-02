<x-modern-layout>
    <x-slot name="title">Отделения РАЧ</x-slot>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-purple-600 to-blue-800">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Отделения РАЧ
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Региональные отделения Российской Ассоциации Челюстно-лицевых хирургов по всей стране
                </p>
            </div>
        </div>
    </section>

    <!-- Departments Section -->
    <section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($departments->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($departments as $department)
                    <div class="bg-white rounded-3xl shadow-lg overflow-hidden card-hover group">
                        <div class="bg-gradient-to-br from-blue-500 to-purple-600 h-48 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                            <div class="text-white text-6xl opacity-20">🏢</div>
                            <div class="absolute bottom-4 left-4 right-4">
                                <h3 class="text-xl font-bold text-white">{{ $department->name }}</h3>
                            </div>
                        </div>
                        
                        <div class="p-8">
                            <div class="mb-6">
                                <p class="text-slate-600 leading-relaxed">
                                    {{ $department->short_description }}
                                </p>
                            </div>

                            <div class="space-y-3 mb-6">
                                @if($department->phone)
                                <div class="flex items-center text-slate-600">
                                    <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <span class="font-medium">{{ $department->phone }}</span>
                                </div>
                                @endif

                                @if($department->email)
                                <div class="flex items-center text-slate-600">
                                    <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="font-medium">{{ $department->email }}</span>
                                </div>
                                @endif

                                @if($department->address)
                                <div class="flex items-start text-slate-600">
                                    <svg class="w-5 h-5 mr-3 mt-0.5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span class="font-medium">{{ $department->address }}</span>
                                </div>
                                @endif
                            </div>

                            <a href="{{ route('departments.show', $department) }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold group-hover:translate-x-2 transition-all duration-300">
                                Подробнее
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-16">
                    <div class="text-6xl mb-6">🏢</div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Отделения пока не добавлены</h3>
                    <p class="text-slate-600 text-lg">Информация об отделениях будет добавлена в ближайшее время</p>
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-blue-800 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Хотите открыть отделение?
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Свяжитесь с нами для получения информации об открытии регионального отделения РАЧ
            </p>
            <a href="mailto:info@rach.ru" class="bg-white hover:bg-gray-50 text-slate-800 px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:scale-105 shadow-xl">
                Связаться с нами
            </a>
        </div>
    </section>
</x-modern-layout>