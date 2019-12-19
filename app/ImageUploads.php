<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageUploads extends Model
{
    public $table = 'fileuploads';

    public $timestamps = false;

    protected $attributes = [
        // 'is_dashboard' => 1,

        'image_status' => 1,



    ];

    protected $fillable = [
		'title',
		'path'
	];
	protected $dates = [
		'deleted_at'
	];
}
