<?php

namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;

class  WebsiteRepository
{

    function __construct()
    {

    }

    public function getData ()
    {
        $data = DB::table('web_settings')
        ->first();



        return $data;
    }



}
