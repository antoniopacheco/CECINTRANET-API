<?php
namespace app\Transformers;

use app\Models\Instructor;
use League\Fractal;

class InstructorTransformer extends Fractal\TransformerAbstract{
	
	public function transform(Instructor $instructor){
	    return [
	        'id'      => (int) $instructor->id,
	        'nombre'   => $instructor->nombre_completo,
	        'email' => $instructor->email,
	        'celular' => $instructor->celular,
	        'cursos' => $instructor->cursos,
	        'sede' => $instructor->user->sede->nombre
	    ];
	}
}