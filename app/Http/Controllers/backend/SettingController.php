<?php

namespace App\Http\Controllers\backend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Image;
class SettingController extends Controller
{
    public function settingPage(){
        $setting=Setting::whereId(1)->first();
        return view('backend.pages.setting',compact('setting'));
    }

    public function updateHiroVideo(Request $request, $id){
        $validate=$request->validate([
            'hiro_video'=>'required|string',
        ]);
        $setting=Setting::findOrFail($id);
        $setting->update([
            'hiro_video'=>$request->hiro_video,
        ]);
        Toastr::success('Hiro video link has been updated');
        return back();
    }


    public function updateFavicon(Request $request,$id){
        $validate = $request->validate([
            'favicon' => 'required|mimes:png,jpg|max:3072',
        ]);
        $setting = Setting::findOrFail($id);
        $this->image_upload($request, $setting->id);
        Toastr::success('Favicon has been updated');
        return back();
    }

    public function image_upload($request, $setting_id)
    {
        $setting = Setting::findorFail($setting_id);

        if ($request->hasFile('favicon')) {
            if ($setting->favicon != 'default_favicon.png') {
                //delete old photo
                $photo_location = 'public/uploads/setting/favicon/';
                $old_photo_location = $photo_location . $setting->favicon;
                unlink(base_path($old_photo_location));
            }
            $photo_loation = 'public/uploads/setting/favicon/';
            $uploaded_photo = $request->file('favicon');
            $new_photo_name = $setting->id . '.' . $uploaded_photo->getClientOriginalExtension();
            $new_photo_location = $photo_loation . $new_photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            $check = $setting->update([
                'favicon' => $new_photo_name,
            ]);
        }
    }
}
