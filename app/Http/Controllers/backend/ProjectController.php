<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::select('id', 'project_title', 'project_title_slug', 'thumbnail', 'created_at')->latest('id')->paginate();
        return view('backend.pages.project.all_project', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'project_title' => 'required|string|max:255|unique:projects,project_title',
            'short_description' => 'required|string|max:20000',
            'title_1' => 'nullable|string|max:255',
            'title_1_description' => 'nullable|string|max:20000',
            'title_2' => 'nullable|string|max:255',
            'title_2_description' => 'nullable|string|max:20000',
            'title_3' => 'nullable|string|max:255',
            'title_3_description' => 'nullable|string|max:20000',
            'title_4' => 'nullable|string|max:255',
            'title_4_description' => 'nullable|string|max:20000',
            'video_link' => 'required|string',
            'behance_link' => 'required|string',
            'thumbnail' => 'required|mimes:png,jpg|max:10240',
        ]);

        $project = Project::create([
            'project_title' => $request->project_title,
            'project_title_slug' => Str::slug($request->project_title),
            'short_description' => $request->short_description,
            'title_1' => $request->title_1,
            'title_1_description' => $request->title_1_description,
            'title_2' => $request->title_2,
            'title_2_description' => $request->title_2_description,
            'title_3' => $request->title_3,
            'title_3_description' => $request->title_3_description,
            'title_4' => $request->title_4,
            'title_4_description' => $request->title_4_description,
            'video_link' => $request->video_link,
            'behance_link' => $request->behance_link,
        ]);

        $this->image_upload($request, $project->id);
        Toastr::success('Project added successfully');
        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $project = Project::where('project_title_slug', $slug)->first();
        return view('backend.pages.project.project_detail', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $project = Project::where('project_title_slug', $slug)->first();
        return view('backend.pages.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $project = Project::where('project_title_slug', $slug)->first();
        $validation = $request->validate([
            'project_title' => 'required|string|max:255|unique:projects,project_title,' . $project->id,
            'short_description' => 'required|string|max:20000',
            'title_1' => 'nullable|string|max:255',
            'title_1_description' => 'nullable|string|max:20000',
            'title_2' => 'nullable|string|max:255',
            'title_2_description' => 'nullable|string|max:20000',
            'title_3' => 'nullable|string|max:255',
            'title_3_description' => 'nullable|string|max:20000',
            'title_4' => 'nullable|string|max:255',
            'title_4_description' => 'nullable|string|max:20000',
            'video_link' => 'required|string',
            'behance_link' => 'required|string',
            'thumbnail' => 'nullable|mimes:png,jpg|max:10240',
        ]);
        $project = Project::where('project_title_slug', $slug)->first();
        $project->update([
            'project_title' => $request->project_title,
            'project_title_slug' => Str::slug($request->project_title),
            'short_description' => $request->short_description,
            'title_1' => $request->title_1,
            'title_1_description' => $request->title_1_description,
            'title_2' => $request->title_2,
            'title_2_description' => $request->title_2_description,
            'title_3' => $request->title_3,
            'title_3_description' => $request->title_3_description,
            'title_4' => $request->title_4,
            'title_4_description' => $request->title_4_description,
            'video_link' => $request->video_link,
            'behance_link' => $request->behance_link,
        ]);

        $this->image_upload($request, $project->id);
        Toastr::success('Project update successfully');
        return redirect()->route('project.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $project = Project::where('project_title_slug', $slug)->first();
        if ($project->thumbnail != 'default_thumbnail.jpg') {
            //delete old photo
            $photo_location = 'public/uploads/project/';
            $old_photo_location = $photo_location . $project->thumbnail;
            unlink(base_path($old_photo_location));
        }
        $project->delete();
        Toastr::success('Project delete successfully');
        return redirect()->route('project.index');
    }

    public function image_upload($request, $project_id)
    {
        $project = Project::findorFail($project_id);

        if ($request->hasFile('thumbnail')) {
            if ($project->thumbnail != 'default_thumbnail.jpg') {
                //delete old photo
                $photo_location = 'public/uploads/project/';
                $old_photo_location = $photo_location . $project->thumbnail;
                unlink(base_path($old_photo_location));
            }
            $photo_loation = 'public/uploads/project/';
            $uploaded_photo = $request->file('thumbnail');
            $new_photo_name = $project->id . '.' . $uploaded_photo->getClientOriginalExtension();
            $new_photo_location = $photo_loation . $new_photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            $check = $project->update([
                'thumbnail' => $new_photo_name,
            ]);
        }
    }

    public function activeProject($id){
        $project=Project::find($id);
        if($project->is_active=='1'){
            $status=0;
        }else{
            $status=1;
        }
        $project->update([
            'is_active'=>$status,
        ]);
        Toastr::success('Project status has been updated');
        return back();
    }
}
