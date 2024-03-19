<?php

namespace App\Services;

use App\Models\User;

class UserService{
    public function getOtherUsers(User $authUser){
        return User::where('id', '<>', $authUser->id)->get();
    }
}