<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Sede extends Model{
    protected $hidden = ['deleted_at'];

    public function aplicacion(){
    	return $this->belongsTo('App\Models\Aplicacion');
    }
    
}
