<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    public $table = 'web_settings';

    public $timestamps = false;

    protected $attributes = [
        // 'is_dashboard' => 1,

        // 'artikels_category_status' => 1,




    ];
    protected $fillable = [
        'id',
        'title_website',
        'description_website',
        'tentang_kami',
        'pengaduan',
        'whatsapp_contact',
        'facebook_contact',
        'instagram_contact',
    ];
}
