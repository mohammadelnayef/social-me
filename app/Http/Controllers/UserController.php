<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserProfileRequest;
use App\Services\UserService;
use App\Models\User;
use Auth;


class UserController extends Controller
{
    public function showNewsfeed(){
        return view('newsfeed');
    }

    public function editProfile(Request $request){
        $userId = $request->segment(2);

        if($userId != Auth::id()){
            return abort(401);
        }
        else{  
            return view('edit-profile');
        }
    }

    public function showProfile(Request $request){
        $userId = $request->segment(2);
        $user = User::findOrFail($userId);
        return view('profile', ['user' => $user]); 
    }

    public function updateUserProfile(UpdateUserProfileRequest $request){

        $validated = $request->validated();
        $userService = new UserService();
        $updated = $userService->updateUserProfile($validated);
        if($updated){
            return redirect('/edit-profile/'. Auth::id())->with('status', 'Profile updated!');
        }
        else{
            return redirect('/edit-profile/'. Auth::id())->with('error', 'Error updating profile!');
        }
    }
}
