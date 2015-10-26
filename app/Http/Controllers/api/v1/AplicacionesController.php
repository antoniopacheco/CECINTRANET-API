<?php
namespace App\Http\Controllers\api\v1;

use App\Models\Privilegio;

class AplicacionesController extends BaseController{
	public function getMyAplicaciones(){
		$user = app('Dingo\Api\Auth\Auth')->user();
		$privilegios = Privilegio::with('aplicacion')
						->where('user_id',$user->id)
						->get();
        return $privilegios;
	}
}