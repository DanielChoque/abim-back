<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Asociado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class asociadoController extends Controller
{
    public function index(){
        $asociado = Asociado::all();
        /*if($asociado->isEmpty()){
            $data = [
                'message' => 'No se encontraron asociados',
                'status' => 404
            ];
            return response()->json($data, 404);
        }  */
             
        $data = [
            'asociado' => $asociado,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'grado' => 'required',
            'nombres' => 'required',
            'ap_p' => 'required',
            'ap_m' => 'required',
            'ci' => 'required'
        ]);
        if($validator->fails()){
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $asociado = Asociado::create([
            'grado' => $request->grado,
            'nombres' => $request->nombres,
            'ap_p' => $request->ap_p,
            'ap_m' => $request->ap_m,
            'ci' => $request->ci
        ]);
        if(!$asociado){
            $data = [
                'message' => 'Error al crear el estudiante',
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'asociado' => $asociado,
            'status' => 201
        ];
        return response()->json($data, 201);
    }
}
