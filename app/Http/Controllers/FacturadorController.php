<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturadorController extends Controller
{
    public function generarComprobante(Request $request)
    {
        $fullname = $request->name." ".$request->lastname;
        return response()->json([
            "fullname"=>$fullname
        ], 200);
    }
}
