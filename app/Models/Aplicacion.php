<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Aplicacion extends Model{
	//use SoftDeletes;
    protected $table = 'aplicaciones';
    protected $hidden = ['deleted_at'];
}
