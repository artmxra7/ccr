<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanSub extends Model
{
    public $table = 'laporan_sub';

    public $timestamps = false;

    public $fillable = [
        'id',
        'nama'
    ];

    protected $attributes = [
        // 'is_dashboard' => 1,

        // 'artikels_category_status' => 1,



    ];
}
