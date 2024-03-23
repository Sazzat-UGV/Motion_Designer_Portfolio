<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\HiroSettingInfo;
use App\Models\Setting;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class HiroSettingController extends Controller
{
    public function hirosettingPage()
    {
        $setting = Setting::whereId(1)->first();
        $hiro_setting = HiroSettingInfo::whereId(1)->first();
        return view('backend.pages.hirosetting', compact('setting', 'hiro_setting'));
    }

    public function updateHiroVideo(Request $request, $id)
    {
        $validate = $request->validate([
            'hiro_video' => 'required|string',
            'hero_main_title' => 'required|string|max:255',
            'hero_title_1' => 'required|string|max:255',
            'hero_title_1_description' => 'required|string|max:20000',
            'hero_title_2' => 'nullable|string|max:255',
            'hero_title_2_description' => 'nullable|string|max:20000',
            'hero_title_3' => 'nullable|string|max:255',
            'hero_title_3_description' => 'nullable|string|max:20000',
            'hero_title_4' => 'nullable|string|max:255',
            'hero_title_4_description' => 'nullable|string|max:20000',
        ]);
        $setting = Setting::findOrFail($id);
        $hiro_setting = HiroSettingInfo::findOrFail($id);

        $setting->update([
            'hiro_video' => $request->hiro_video,
        ]);

        $hiro_setting->update([
            'hero_main_title' => $request->hero_main_title,
            'hero_title_1' => $request->hero_title_1,
            'hero_title_1_description' => $request->hero_title_1_description,
            'hero_title_2' => $request->hero_title_2,
            'hero_title_2_description' => $request->hero_title_2_description,
            'hero_title_3' => $request->hero_title_3,
            'hero_title_3_description' => $request->hero_title_3_description,
            'hero_title_4' => $request->hero_title_4,
            'hero_title_4_description' => $request->hero_title_4_description,
        ]);

        if ($request->hasFile('hiro_image')) {
            $file = $request->file('hiro_image');
            $uploaded_photo = $request->file('hiro_image');
            $fileName = 'hiro_image' . '.' . $uploaded_photo->getClientOriginalExtension();
            $upload = $file->move(public_path('uploads/setting'), $fileName);
            $hiro_setting->update([
                'hiro_image' => $fileName,
            ]);
        }
        Toastr::success('Hiro video setting has been updated');
        return back();
    }
}
