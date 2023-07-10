<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function search()
    {
        $query = User::query();

        $users = $query->get();
        return $users;
    }
}
