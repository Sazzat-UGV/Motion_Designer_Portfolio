<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class AdminController extends Controller
{
    public function profilePage()
    {
        return view('backend.pages.profile.profile');
    }

    public function updateProfile(ProfileUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        Toastr::success('Profile has been updated');
        return redirect()->route('admin.profilePage', '#profile-settings');
    }

    public function updatePassword(ChangePasswordRequest $request)
    {

        $currentPasswordStatus = Hash::check($request->current_password, Auth::user()->password);

        if ($currentPasswordStatus) {
            User::findorFail(Auth::user()->id)->update([
                // 'password' => $request->current_password,
                'password' => Hash::make($request->new_password),
            ]);
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            Toastr::success('Password has been changed successfully');
            return redirect()->route('admin.loginPage');
        } else {
            Toastr::error('Current password does not match with old password');
            return redirect()->route('admin.profilePage');
        }
    }

    public function updateImage(Request $request)
    {
        $validate = $request->validate([
            'image' => 'required|mimes:png,jpg|max:10240',
        ]);
        $user = User::findOrFail(Auth::user()->id);
        $this->image_upload($request, $user->id);
        Toastr::success('Profile image has been updated');
        return redirect()->route('admin.profilePage');
    }

    public function image_upload($request, $user_id)
    {
        $user = User::findorFail($user_id);

        if ($request->hasFile('image')) {
            if ($user->image != 'default_user.jpg') {
                //delete old photo
                $photo_location = 'public/uploads/user/';
                $old_photo_location = $photo_location . $user->image;
                unlink(base_path($old_photo_location));
            }
            $photo_loation = 'public/uploads/user/';
            $uploaded_photo = $request->file('image');
            $new_photo_name = $user->id . '.' . $uploaded_photo->getClientOriginalExtension();
            $new_photo_location = $photo_loation . $new_photo_name;
            Image::make($uploaded_photo)->resize(800, 800)->save(base_path($new_photo_location));
            $check = $user->update([
                'image' => $new_photo_name,
            ]);
        }
    }

}
