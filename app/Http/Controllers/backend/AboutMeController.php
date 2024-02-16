<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Brian2694\Toastr\Facades\Toastr;
use Image;

class AboutMeController extends Controller
{
    public function showAboutMe()
    {
        $about_me = About::findOrFail(1)->first();
        return view('backend.pages.aboutme', compact('about_me'));
    }

    public function updateAboutMe(AboutRequest $request, $id)
    {
        $about_me = About::findOrFail($id);
        $about_me->update([
            'name' => $request->name,
            'about_me' => $request->about_me,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'behance' => $request->behance,
        ]);

        $this->image_upload($request, $about_me->id);
        Toastr::success('Information has been updated');
        return back();
    }

    public function image_upload($request, $about_me_id)
    {
        $about_me = About::findorFail($about_me_id);

        if ($request->hasFile('image')) {
            if ($about_me->image != 'profile.jpg') {
                //delete old photo
                $photo_location = 'public/uploads/about/';
                $old_photo_location = $photo_location . $about_me->image;
                unlink(base_path($old_photo_location));
            }
            $photo_loation = 'public/uploads/about/';
            $uploaded_photo = $request->file('image');
            $new_photo_name = $about_me->id . '.' . $uploaded_photo->getClientOriginalExtension();
            $new_photo_location = $photo_loation . $new_photo_name;
            Image::make($uploaded_photo)->resize(1000, 1000)->save(base_path($new_photo_location));
            $check = $about_me->update([
                'image' => $new_photo_name,
            ]);
        }
    }

}
