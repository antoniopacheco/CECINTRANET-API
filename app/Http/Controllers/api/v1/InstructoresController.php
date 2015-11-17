<?php
namespace App\Http\Controllers\api\v1;

use App\Models\Instructor;
use App\Transformers\InstructorTransformer;
use Input;
use App\User;
//app('Dingo\Api\Transformer\Factory')->register('Instructor', 'InstructorTransformer');

class InstructoresController extends BaseController{
	public function index(){

   		$per_page = Input::get('per_page',25);
		$search = Input::get('search','');
		$sede = Input::get('sede',0);
		$order_by = Input::get('order','nombre_completo');
		$order_dir = Input::get('orderdir','ASC');

		$instructores = Instructor::with('user')
					->orderBy($order_by,$order_dir);

		if($sede){
			$instructores = $instructores->whereIn('user_id',function($query) use ($sede) {
				$query->select('id')
				->from('users')
				->where('sede_id',$sede);
			});
		}

		if($search != ''){
			$instructores = $instructores->where(function($query) use ($search){
				$query->where('nombre_completo','like','%'.$search.'%')
					->orwhere('cursos','like','%'.$search.'%');
			});
		}
		
		$instructores = $instructores->paginate($per_page);
		return $this->response->paginator($instructores, new InstructorTransformer);
		
	}
}