<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('pages.profile.create', compact('user'));
    }
    public function update(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $user->id,
            'password' => 'nullable|confirmed',
            'image' => 'nullable|image',
        ]);
        $data = $request->except('password');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file_name = date('mdYHis') . '-' . $name;
            $file = $file->storeAs('file', $file_name, 'public_uploads');
            if (Auth::user()->image) {
                $user->deleteFile();
            }
            $data['image'] = $file;
        };
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }
        $user->update($data);
        session()->flash('success');
        return back();
    }
}
