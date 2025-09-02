<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Conference;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Получаем последние новости
        $latestNews = News::published()
            ->latest()
            ->take(3)
            ->get();

        // Получаем предстоящие конференции
        $upcomingConferences = Conference::where('status', 'registration_open')
            ->where('starts_at', '>', now())
            ->orderBy('starts_at')
            ->take(2)
            ->get();

        return view('home', compact('latestNews', 'upcomingConferences'));
    }
}
