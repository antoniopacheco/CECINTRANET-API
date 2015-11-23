<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\Privilegio;

class PermisoAplicacion{
    private $aplicacion_id;


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $aplicacion){
        $metodo = $request->method();
        $user = JWTAuth::parseToken()->authenticate();
        switch ($metodo) {
            case 'GET':
                $tipo_permiso = 1;
            break;

            case 'POST':
                $tipo_permiso = 2;
            break;

            case 'PUT':
                $tipo_permiso = 2;
            break;

            case 'DELETE':
                $tipo_permiso = 2;
            break;
        }
        $privilegios = Privilegio::with('aplicacion')
                        ->where('user_id',$user->id)
                        ->where('aplicacion_id',$aplicacion);
                        
        if($tipo_permiso == 1){
            $privilegios = $privilegios->where(function ($query){
                $query->where('privilegios_tipo_id',1)
                ->orWhere('privilegios_tipo_id',2);
            });
        }else{
            $privilegios = $privilegios->where('privilegios_tipo_id',$tipo_permiso);
        }
        $privilegios = $privilegios->first();
        if($privilegios){
            return $next($request);
        }else{
            return response('Unauthorized.', 401);
        }
    
    }
}
