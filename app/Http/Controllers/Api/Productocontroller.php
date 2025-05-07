<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        
        return response()->json([
            'productos' => $productos,
            'message' => 'Productos obtenidos correctamente',
            'status' => 200
        ], 200);
    }

    public function insert(Request $request)
    {
        $producto = Producto::create([
            'name' => $request->name,
            'status' => $request->status
        ]);
        
        return response()->json([
            'producto' => $producto,
            'message' => 'Producto creado correctamente',
            'status' => 201
        ], 201);
    }
}
