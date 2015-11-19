<?php
namespace App\Http\Controllers\api\v1;
use App\Models\Sede;

class SedesController extends BaseController{

	public function index(){
		return Sede::all();
	}
}