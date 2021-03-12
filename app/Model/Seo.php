<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = [
        'meta_title','meta_author','meta_description','meta_keyword','google_verification',
        'being_verification','google_analytic','alexa_analytic'
    ];
}
