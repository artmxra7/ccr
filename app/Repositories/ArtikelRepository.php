<?php

namespace App\Http\Repositories;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class  ArtikelRepository
{

    function __construct()
    {

    }

    public function getArtikel ()
    {
        $data = DB::table('artikels')
        ->select('artikels.artikels_code',
        'artikels.artikels_category_id',
        'artikels.artikels_title',
        'artikels.artikels_image',
        'artikels.id as noartikels',
        'artikels.artikels_content',
         'nc.id',
         'nc.artikels_category_name')
        ->leftJoin('artikels_categories as nc', DB::raw('BINARY artikels.artikels_category_id'), '=', DB::raw('BINARY nc.id'))
        ->where('artikels_delete', 0)
        ->orderBy('artikels_date_create', 'DESC')
        ->get();



        return $data;
    }


    public function createArtikel ($input)
    {


        $create_job = DB::table('artikels')
            ->insert(
                [
                    'artikels_code' => generateFiledCode('NEWS'),
                    'artikels_title' => $input['title'],
                    'artikels_slug' => $input['slug'],
                    'artikels_category_id' => $input['news_category_id'],
                    'artikels_images' => $input['photo'],
                    'artikels_seo' => $input['seo'],
                    'artikels_content' => $input['content'],
                    'artikels_status' => 1,
                    'artikels_delete' => 0,
                    'artikels_publisher' => $input['artikels_publisher'],
                    'artikels_date_create' => Carbon::now(),
                ]
            );
        return $create_job;
    }


}
