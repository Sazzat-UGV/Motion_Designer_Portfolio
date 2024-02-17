<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settingPage()
    {
        $setting = Setting::whereId(1)->first();
        return view('backend.pages.setting', compact('setting'));
    }

    public function updateHiroVideo(Request $request, $id)
    {
        $validate = $request->validate([
            'hiro_video' => 'required|string',
        ]);
        $setting = Setting::findOrFail($id);
        $setting->update([
            'hiro_video' => $request->hiro_video,
        ]);
        Toastr::success('Hiro video link has been updated');
        return back();
    }

    public function updateFavicon(Request $request)
    {
        $request->validate([
            'favicon' => 'required|mimes:png|max:3072',
        ]);

        if ($request->hasFile('favicon')) {
            $file = $request->file('favicon');

            if ($file->getClientOriginalExtension() === 'png') {
                $uploaded_photo = $request->file('favicon');
                $fileName = 'favicon' . '.' . $uploaded_photo->getClientOriginalExtension();
                $upload = $file->move(public_path('uploads/setting'), $fileName);
                Toastr::success("Favicon uploaded successfully");
                return back();
            } else {
                Toastr::error("Please upload a png file");
                return back();
            }
        } else {
            Toastr::error("Please upload a png file first");
            return back();
        }
    }

    public function updatePreloader(Request $request)
    {
        $request->validate([
            'preloader' => 'required',
        ]);

        if ($request->hasFile('preloader')) {
            $file = $request->file('preloader');

            if ($file->getClientOriginalExtension() === 'gif') {
                $uploaded_photo = $request->file('preloader');
                $fileName = 'preloader' . '.' . $uploaded_photo->getClientOriginalExtension();
                $upload = $file->move(public_path('uploads/setting'), $fileName);
                Toastr::success("Preloader uploaded successfully");
                return back();
            } else {
                Toastr::error("Please upload a gif file");
                return back();
            }
        } else {
            Toastr::error("Please upload a gif file first");
            return back();
        }
    }

    public function updateLottieFile(Request $request)
    {
        $request->validate([
            'lottie_file' => 'required',
        ]);

        if ($request->hasFile('lottie_file')) {
            $file = $request->file('lottie_file');

            if ($file->getClientOriginalExtension() === 'js') {
                $uploaded_photo = $request->file('lottie_file');
                $fileName = 'logo_lottie_file' . '.' . $uploaded_photo->getClientOriginalExtension();
                $upload = $file->move(public_path('uploads/setting'), $fileName);
                Toastr::success("File uploaded successfully");
                return back();
            } else {
                Toastr::error("Please upload a js file");
                return back();
            }
        } else {
            Toastr::error("Please upload a js file first");
            return back();
        }
    }

    public function updateJsonFile(Request $request)
    {
        $request->validate([
            'json_file' => 'required',
        ]);

        if ($request->hasFile('json_file')) {
            $file = $request->file('json_file');

            if ($file->getClientOriginalExtension() === 'json') {
                $uploaded_photo = $request->file('json_file');
                $fileName = 'logo_json_file' . '.' . $uploaded_photo->getClientOriginalExtension();
                $upload = $file->move(public_path('uploads/setting'), $fileName);
                Toastr::success("File uploaded successfully");
                return back();
            } else {
                Toastr::error("Please upload a json file");
                return back();
            }
        } else {
            Toastr::error("Please upload a json file first");
            return back();
        }
    }

}
