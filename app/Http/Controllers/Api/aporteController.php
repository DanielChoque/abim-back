<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Aporte;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class aporteController extends Controller
{
    public function index(){
        $aporte = Aporte::all();
        $data = [
            'aporte' => $aporte,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
    
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'fecha_transaccion' => 'required',
            'cost' => 'required'
        ]);
        if($validator->fails()){
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $aporte = Aporte::create([
            'fecha_transaccion' => $request->fecha_transaccion,
            'cost' => $request->cost,
            'ci' => $request->ci
        ]);
        if(!$aporte){
            $data = [
                'message' => 'Error al crear el estudiante',
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'aporte' => $aporte,
            'status' => 201
        ];
        return response()->json($data, 201);
    }
}
