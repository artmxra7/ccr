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
        'artikels.artikels_images',
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
    public function getArtikelHighlight ()
    {
        $data = DB::table('artikels')
        ->select('artikels.artikels_code',
        'artikels.artikels_category_id',
        'artikels.artikels_title',
        'artikels.artikels_slug',
        'artikels.artikels_images',
        'artikels.artikels_date_create',
        'artikels.id as noartikels',
        'artikels.artikels_content',
         'nc.id',
         'nc.artikels_category_name')
        ->leftJoin('artikels_categories as nc', DB::raw('BINARY artikels.artikels_category_id'), '=', DB::raw('BINARY nc.id'))
        ->where('artikels_delete', 0)
        ->orderBy('artikels_date_create', 'DESC')
        ->limit(3)
        ->get();



        return $data;
    }
    public function getArtikelList ()
    {
        $data = DB::table('artikels')
        ->select('artikels.artikels_code',
        'artikels.artikels_category_id',
        'artikels.artikels_title',
        'artikels.artikels_short',
        'artikels.artikels_slug',
        'artikels.artikels_images',
        'artikels.artikels_date_create',
        'artikels.id as noartikels',
        'artikels.artikels_content',
         'nc.id',
         'nc.artikels_category_name')
        ->leftJoin('artikels_categories as nc', DB::raw('BINARY artikels.artikels_category_id'), '=', DB::raw('BINARY nc.id'))
        ->where('artikels_delete', 0)
        ->orderBy('artikels_date_create', 'DESC')
        ->limit(3)
        ->get();



        return $data;
    }
    public function getArtikelJson ()
    {
        $data = DB::table('artikels')
        ->select('artikels.artikels_code',
        'artikels.artikels_category_id',
        'artikels.artikels_title',
        'artikels.artikels_short',
        'artikels.artikels_slug',
        'artikels.artikels_images',
        'artikels.artikels_date_create',
        'artikels.id as noartikels',
        'artikels.artikels_content',
         'nc.id',
         'nc.artikels_category_name')
        ->leftJoin('artikels_categories as nc', DB::raw('BINARY artikels.artikels_category_id'), '=', DB::raw('BINARY nc.id'))
        ->where('artikels_delete', 0)
        ->orderBy('artikels_date_create', 'DESC')
        ->paginate(2);



        return $data;
    }


    public function getArtikelBumn ()
    {
        $data = DB::table('artikels')
        ->select('artikels.artikels_code',
        'artikels.artikels_category_id',
        'artikels.artikels_title',
        'artikels.artikels_short',
        'artikels.artikels_slug',
        'artikels.artikels_images',
        'artikels.artikels_date_create',
        'artikels.id as noartikels',
        'artikels.artikels_content',
         'nc.id',
         'nc.artikels_category_name')
        ->leftJoin('artikels_categories as nc', DB::raw('BINARY artikels.artikels_category_id'), '=', DB::raw('BINARY nc.id'))
        ->where('artikels_delete', 0)
        ->where('artikels_category_id', 4)
        ->orderBy('artikels_date_create', 'DESC')
        ->limit(3)
        ->get();



        return $data;
    }
    public function showArtikelBumn ($id)
    {
        $data = DB::table('artikels')
        ->select('artikels.artikels_code',
        'artikels.artikels_category_id',
        'artikels.artikels_title',
        'artikels.artikels_short',
        'artikels.artikels_slug',
        'artikels.artikels_images',
        'artikels.artikels_date_create',
        'artikels.id as noartikels',
        'artikels.artikels_content',
         'nc.id',
         'nc.artikels_category_name')
        ->leftJoin('artikels_categories as nc', DB::raw('BINARY artikels.artikels_category_id'), '=', DB::raw('BINARY nc.id'))
        ->where('artikels_slug', $id)
        ->first();



        return $data;
    }
    public function getArtikelKampus ()
    {
        $data = DB::table('artikels')
        ->select('artikels.artikels_code',
        'artikels.artikels_category_id',
        'artikels.artikels_title',
        'artikels.artikels_short',
        'artikels.artikels_slug',
        'artikels.artikels_images',
        'artikels.artikels_date_create',
        'artikels.id as noartikels',
        'artikels.artikels_content',
         'nc.id',
         'nc.artikels_category_name')
        ->leftJoin('artikels_categories as nc', DB::raw('BINARY artikels.artikels_category_id'), '=', DB::raw('BINARY nc.id'))
        ->where('artikels_delete', 0)
        ->where('artikels_category_id', 3)
        ->orderBy('artikels_date_create', 'DESC')
        ->limit(3)
        ->get();



        return $data;
    }



    public function createArtikel ($input)
    {


        $create_job = DB::table('artikels')
            ->insert(
                [
                    'artikels_code' => generateFiledCode('ARTIKELS'),
                    'artikels_title' => $input['artikels_title'],
                    'artikels_slug' => $input['artikels_slug'],
                    'artikels_category_id' => $input['artikels_category_id'],
                    'artikels_images' => $input['artikels_images'],
                    'artikels_seo' => $input['artikels_seo'],
                    'artikels_content' => $input['artikels_content'],
                    'artikels_short' => $input['artikels_slug'],
                    'artikels_type' => $input['artikels_category_id'],
                    'artikels_status' => 1,
                    'artikels_delete' => 0,
                    'artikels_publisher' => $input['artikels_publisher'],
                    'artikels_date_create' => Carbon::now(),
                ]
            );
        return $create_job;
    }

    public function updateArtikel ($input, $id)
    {

        // dd($input);

        $updateArtikel = DB::table('artikels')
        ->where('id', $id)
        ->update($input);


        return $updateArtikel;
    }


}
