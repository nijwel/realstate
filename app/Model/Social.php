<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{	
	protected $fillable = [
        'facebook','twitter','linkedin','youtube'
    ];
}
