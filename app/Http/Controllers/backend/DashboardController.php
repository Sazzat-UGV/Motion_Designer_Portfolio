<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Project;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $total_project=Project::count();
        $total_active_project=Project::where('is_active',1)->count();
        $total_deactive_project=Project::where('is_active',0)->count();
        $projects=Project::select('id','created_at','project_title','short_description','is_active')->latest('id')->limit(10)->get();
        return view('backend.pages.dashboard',compact(
            'total_project',
            'total_active_project',
            'total_deactive_project',
            'projects',
        ));
    }
}
