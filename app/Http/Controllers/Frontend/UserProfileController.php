<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserProfileUpdateRequest;

class UserProfileController extends Controller
{
    public function profileUpdate(UserProfileUpdateRequest $request, $user_id){
        $record = User::find($user_id);
         $record->name = request('name');
         if ($request->hasFile('picture__input')) {
             $destination = $record->picture__input;
             if(File::exists($destination)){
                 File::delete($destination);
             }
             $file = $request->file('picture__input');
             $ext = $file->getClientOriginalExtension();
             $filename = time() . '.' . $ext;
             $file->move('uploads/profilePics/', $filename);
             $record->picture__input = 'uploads/profilePics/' . $filename;
         }
         $record->phone = request('phone');
         $record->email = request('email');
         $record->address = request('address');
         $record->update();
         return redirect()->back()->with('message','Successfully profile Updated');
    }

    public function changePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }

        // #Update the new Password
        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        Auth::logout();
        return redirect()->route('login')->with('message', 'Successfully slider Created');
    }
}
