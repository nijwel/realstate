<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{	

	protected $fillable = [
        'name','designation','image','facebook','twitter','linkedin'
    ];
    
}
