<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Project;
use App\Models\Setting;

class HomePageController extends Controller
{
    public function homePage()
    {
        $setting = Setting::findOrFail(1)->first();
        $projects = Project::where('is_active', 1)->select('id', 'project_title', 'project_title_slug', 'short_description', 'thumbnail')->get();
        return view('frontend.pages.home', compact('setting', 'projects'));
    }

    public function aboutPage()
    {
        $about_me = About::whereId(1)->select('id', 'about_me', 'image')->first();
        return view('frontend.pages.about', compact('about_me'));
    }

    public function projectDetails($slug)
    {
        $project = Project::where('project_title_slug', $slug)->first();
        return view('frontend.pages.detail', compact('project'));
    }
}
