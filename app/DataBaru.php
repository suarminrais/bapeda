<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBaru extends Model
{
    public function scan()
    {
    	return $this->belongsToMany('App\Upload');
    }
}
