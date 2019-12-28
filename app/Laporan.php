<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{

    public $table = 'laporan';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';





    public $fillable = [
        'laporan_sub_id',
        'laporan',
        'pelapor',
        'laporan_status',
        'created_at',
        'updated_at',
    ];


    protected $attributes = [
    'laporan_status' => 0,
    ];
}
