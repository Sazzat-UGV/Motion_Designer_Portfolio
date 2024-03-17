<?php

namespace App\Http\Controllers\frontend;

use App\Models\About;
use App\Models\Project;
use App\Models\Setting;
use App\Models\HiroSettingInfo;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function homePage()
    {
        $setting = Setting::findOrFail(1)->first();
        $projects = Project::where('is_active', 1)->select('id', 'project_title', 'project_title_slug', 'short_description', 'thumbnail')->latest('id')->get();
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

    public function reelPage(){
        $setting = Setting::findOrFail(1)->first();
        $hiro_setting = HiroSettingInfo::findOrFail(1);
        return view('frontend.pages.reel',compact('setting','hiro_setting'));
    }
}
