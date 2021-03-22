<?php

namespace App\Policies;

use App\Models\User;
use App\Models\post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

//    public function before(User $user){
//        if ($user->isAdmin()){
//            return true;
//        }
//    }

    public function update(User $user, post $post)
    {
        //
        return $post->user->is($user);
    }
}
