<?php

namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;

class  UserRepository
{

    function __construct()
    {

    }

    public function getData ()
    {
        $data = DB::table('users')
        ->select(
            'users.id',
            'users.users_code',
            'users.name',
            'users.email',
            'users.phone',
            'users.created_at',
        )
        ->orderBy('created_at', 'DESC')
        ->get();



        return $data;
    }

    public function getDetail($id)
    {


        $data = DB::table('news_categories')
        ->select(
            'news_categories.news_category_name',
            'news_categories.news_category_code',
        )

        ->where('news_categories.news_category_code', $id)
        ->limit(1)
        ->first();

        return $data;
    }


}
