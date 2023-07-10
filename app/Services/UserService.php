<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserService
{
    /**
     * Userテーブルを検索する
     * @return collection
     */
    public function search()
    {
        $query = User::query();

        $users = $query->get();
        return $users;
    }

    /**
     * Userテーブルを登録する
     * @param  array $request
     * @return void
     */
    public function store(array $request)
    {

        $user = new User();
        $user->fill($request);
        $result = $user->save();
        if (!$result) {
            return "テーブルにデータを登録できませんでした";
        }
        return $user;
    }
}
