<?php

namespace App\Http\Controllers\api\v1;

class TestController extends BaseController{

	public function index(){
		var_dump("hola");
		die();
	}
}
