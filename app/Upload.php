<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    public function databaru()
    {
    	return $this->hasMany('App\DataBaru');
    }
}
