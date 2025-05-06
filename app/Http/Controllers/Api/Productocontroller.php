<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class Productocontroller extends Controller
{
    public function index()
    {
        $producto = Producto::all();

        $data = [
            'producto' => $producto ,
            'message' => 'productos',
            'status' => 200];

        return response()->json($data,200);

    //
}
}
