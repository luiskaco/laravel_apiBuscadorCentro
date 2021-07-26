<?php

namespace App\Http\Controllers;

use App\Models\Zones;
use App\Models\district;
use App\Models\description;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function zone(){
        return Zones::all()->pluck('name','id');
    }

    public function district(Request $request, $id = null){
        //validar
        if(empty($id)){
            return response()->json([
                "status" => "fail",
                "message" => "No puede quedar vacio",
                "result"=> null,
            ], 400);
        }

        if(!is_numeric($id)){
            return response()->json([
                "status" => "fail",
                "message" => "La cadena ingresada debe ser un número",
                "result"=> null,
            ], 400);
        }

        try {
           $data = district::where('zones_id', $id)->get();

           if( count($data) > 0){
                return response()->json([
                    "status" => "success",
                    "message" => "Consulta realizada correctamente",
                    "result"=> $data,
                ], 200);
           }else{
                return response()->json([
                    "status" => "success",
                    "message" => "No hemos encontrado resultado",
                    "result"=> null,
                ], 200);
           }

        } catch (\Throwable $th) {

            return response()->json([
                "status" => "fail",
                "message" => "Ha ocurrido un problema",
                "result"=> null,
            ], 400);
        }


    }

    public function description(Request $reques, $id){

           //validar
        if(empty($id)){
            return response()->json([
                "status" => "fail",
                "message" => "No puede quedar vacio",
                "result"=> null,
            ], 400);
        }

        if(!is_numeric($id)){
            return response()->json([
                "status" => "fail",
                "message" => "La cadena ingresada debe ser un número",
                "result"=> null,
            ], 400);
        }

        try {
            $data = description::where('district_id', $id)->get();

            if( count($data) > 0){
                 return response()->json([
                     "status" => "success",
                     "message" => "Consulta realizada correctamente",
                     "result"=> $data,
                 ], 200);
            }else{
                 return response()->json([
                     "status" => "success",
                     "message" => "No hemos encontrado resultado",
                     "result"=> null,
                 ], 200);
            }

         } catch (\Throwable $th) {

             return response()->json([
                 "status" => "fail",
                 "message" => "Ha ocurrido un problema",
                 "result"=> null,
             ], 400);
         }


    }
}
