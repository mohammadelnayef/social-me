<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Auth;

class UserService{

    private $user;

    public function __construct(){
        $this->user = User::find(Auth::id());
    }

    public function updateUserProfile(array $formInput):bool {

        if(isset($formInput['profile_img'])){
            $updated = $this->updateProfileImage($formInput['profile_img']);
        }
        if(isset($formInput['user_id'] && $formInput['user_id'] != $this->user->user_id )){
            $this->updateUserId($formInput['user_id']);
        }
        if($updated){
            return true;
        }
        else{
            return false;
        }

    }

    public function updateProfileImage(UploadedFile $file):bool {

        $oldImg = $this->user->profile_img;
        $filePath = Storage::putFile('public', $file);

        $saved = $this->saveFileNameToDB($filePath);
        if($saved){
            $this->deleteFile($oldImg);
            return true;
        }
        else{
            return false;
        }
        
    }

    public function saveFileNameToDB(string $filePath):bool {

        if($filePath){
            $this->user->profile_img =  str_replace('public/', '', $filePath);
            $this->user->save();
            return true;
        }
        else{
            return false;
        }

    }

    public function deleteFile(string $oldImg){
        Storage::disk('public')->delete($oldImg);
    }

    public function updateUserId(string $user_id){
        $this->user->user_id = $user_id;
    }

    public function updateFullName(string $fullName){}

    public function updateDescription(string $description){}
}