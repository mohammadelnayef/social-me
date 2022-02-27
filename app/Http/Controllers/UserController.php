<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserProfileRequest;
use App\Services\UserService;

class UserController extends Controller
{
    public function updateUserProfile(UpdateUserProfileRequest $request):bool {

        $validated = $request->validated();
        $userService = new UserService();
        $userService->updateUserProfile($validated);
    }
}
