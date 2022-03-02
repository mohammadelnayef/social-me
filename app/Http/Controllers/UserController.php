<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserProfileRequest;
use App\Services\UserService;
use Auth;

class UserController extends Controller
{
    public function showNewsfeed(){
        return view('newsfeed');
    }

    public function editProfile(){
        return view('edit-profile');
    }

    public function showProfile(){
        return view('profile');
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
