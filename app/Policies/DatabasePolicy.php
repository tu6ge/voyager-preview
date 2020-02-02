<?php

namespace App\Polices;

use App\User;

class DatabasePolicy
{
    public function browser(){
        return true;
    }
    public function edit(User $user)
    {
        return $user->name == 'guest' ? false: true;
    }

    public function delete(User $user)
    {
        return $user->name == 'guest' ? false: true;
    }
}