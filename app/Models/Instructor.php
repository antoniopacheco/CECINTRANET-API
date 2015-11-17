<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Instructor extends Model{
	//use SoftDeletes;
    protected $table = 'instructores';
    protected $hidden = ['deleted_at'];

    public function user(){
		return $this->belongsTo('App\User')->with('sede');
    }
}
