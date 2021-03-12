<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Messege extends Model
{
    protected $fillable = [
        'phone','name','email','subject','details'
    ];
}
