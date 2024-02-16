<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
   public function homePage(){
    $setting=Setting::findOrFail(1)->first();
    return view('frontend.pages.home',compact('setting'));
   }
   

   public function aboutPage(){
    $about_me=About::whereId(1)->select('id','about_me','image')->first();
    return view('frontend.pages.about',compact('about_me'));
   }
}
