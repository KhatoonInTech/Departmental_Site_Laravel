<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = "content";
    protected $fillable = [
        'Page',
        'Section',
        'Title', 
        'Body',
        'Link',
        'Link_text',
        'picture_url',

    ];
}
