<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    public function modify(User $user, Post $post): Response
    {
        if($user->id === $post->user_id) 
        {
            $this->deny('You do not own this post.');
        }
    
        return true;
        }
    }

