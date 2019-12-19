<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtikelCategory extends Model
{
    public $table = 'artikels_categories';

    public $timestamps = false;

    protected $attributes = [
        // 'is_dashboard' => 1,

        'artikels_category_status' => 1,



    ];
}
