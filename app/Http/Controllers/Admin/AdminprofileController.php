<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminprofileController extends Controller
{
    public function adminprofile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile.profile', compact('admin'));
    }
    public function profileupdate(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $admin->firstname = $request->name;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'uploads/admins/' . $filename;
            $file->move(public_path('uploads/admins'), $filePath);
            $admin->image = $filename;
        }
        // dd($admin);
        $admin->save();
        return redirect()->route('admin-profile')->with('success', 'Profile Updated Successfully');
    }
    public function changepassword(Request $request)
    {
        // dd($request->all());
        $admin = Auth::guard('admin')->user();
        $this->validate($request, [
            'oldpass' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8']
        ]);
        $data = $request->all();
        if (!\Hash::check($data['oldpass'], $admin->password)) {

            return back()->with('flash_danger', 'You have entered wrong password');
        } else {

            if ($request->password != $request->confirm_password) {

                return back()->with('flash_danger', 'Password and Confirm Password Must be same!');
            } else {
                $admin->password = bcrypt($request->password);
                $admin->password_hint = $request->password;
                $admin->save();
                return back()->with('flash_success', 'Password Changed');
            }
        }
    }
}
