<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Department;
use App\Models\Conference;
use App\Models\Publication;
use App\Models\Project;
use App\Models\Partner;
use App\Models\Page;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function about()
    {
        $page = Page::where('slug', 'about')->first();
        return view('public.about', compact('page'));
    }

    public function mediaAboutUs()
    {
        $page = Page::where('slug', 'media-about-us')->first();
        return view('public.media-about-us', compact('page'));
    }

    public function internationalCooperation()
    {
        $page = Page::where('slug', 'international-cooperation')->first();
        return view('public.international-cooperation', compact('page'));
    }

    public function publicOffer()
    {
        $page = Page::where('slug', 'public-offer')->first();
        return view('public.public-offer', compact('page'));
    }

    public function departments()
    {
        $departments = Department::with(['events', 'projects'])->get();
        return view('public.departments', compact('departments'));
    }

    public function departmentShow(Department $department)
    {
        $department->load(['events', 'projects']);
        return view('public.department-show', compact('department'));
    }

    public function news()
    {
        $news = News::published()->latest('published_at')->paginate(10);
        return view('public.news', compact('news'));
    }

    public function newsShow(News $news)
    {
        if (!$news->is_published) {
            abort(404);
        }
        return view('public.news-show', compact('news'));
    }

    public function events()
    {
        // Здесь будет логика для мероприятий на основе файловой системы
        return view('public.events');
    }

    public function conferences()
    {
        $currentConference = Conference::where('status', 'registration_open')
            ->where('starts_at', '>', now())
            ->orderBy('starts_at')
            ->first();

        $pastConferences = Conference::where('status', 'completed')
            ->orderBy('starts_at', 'desc')
            ->get()
            ->groupBy(function($conference) {
                return $conference->starts_at->year;
            });

        return view('public.conferences', compact('currentConference', 'pastConferences'));
    }

    public function conferenceShow(Conference $conference)
    {
        return view('public.conference-show', compact('conference'));
    }

    public function publications()
    {
        $publications = Publication::latest('published_at')->paginate(10);
        return view('public.publications', compact('publications'));
    }

    public function publicationShow(Publication $publication)
    {
        return view('public.publication-show', compact('publication'));
    }

    public function projects()
    {
        $projects = Project::paginate(10);
        return view('public.projects', compact('projects'));
    }

    public function projectShow(Project $project)
    {
        return view('public.project-show', compact('project'));
    }

    public function partners()
    {
        $partners = Partner::all();
        return view('public.partners', compact('partners'));
    }

    public function partnerShow(Partner $partner)
    {
        return view('public.partner-show', compact('partner'));
    }

    public function membership()
    {
        $page = Page::where('slug', 'membership')->first();
        return view('public.membership', compact('page'));
    }
}
