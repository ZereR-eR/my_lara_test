<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function changePassword(){
        return view('profile.change-password');
    }

    public function updatePassword(Request $request){
        $matchOldPassword = new MatchOldPassword();
        $request->validate([
            "current_password" => ['required', $matchOldPassword],
            "password" => 'required',
            "password_confirmation" => 'required|same:password'
        ]);

        $currentUser = User::find(Auth::id());
        $currentUser->password = Hash::make($request->password);
        $currentUser->update();
        Auth::logout();
        return redirect()->route('login')->with('toast',Info::showToast('success','Password Change'));

    }

    public function updatePhoto(Request $request){

        $request->validate([
            "photo" => "required"
        ]);

        $newName = uniqid()."_user.".$request->file("photo")->extension();
        $request->file("photo")->storeAs("public/user-photo",$newName);

        $currentUser = User::find(Auth::id());
        $currentUser->photo = $newName;
        $currentUser->update();
        return redirect()->back()->with("toast",Info::showToast('success','Photo Uploaded Success'));
    }
}
