<?php

namespace App\Http\Controllers;

use App\Http\Requests\Compra\StoreRequest;
use App\Http\Requests\Compra\UpdateRequest;
use App\Models\Compra;
use App\Models\Producto;
use App\Models\Proveedor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    public function index()
    {
        $compras=Compra::get();
        return view('compras.index', compact('compras'));
    }
    public function create()
    {
        $proveedors = Proveedor::get();
        $productos = Producto::get();

        return view('compras.create', compact('proveedors', 'productos'));
    }
    public function store(StoreRequest $request)
    {
        $usuario = Auth::user()->id;
        $compra = Compra::create($request->all()+['user_id'=>$usuario,'fecha_compra'=>Carbon::now('America/Lima')]);
        foreach($request->producto_id as $key=>$producto){
            $results[]=array(
                'producto_id'=>$request->producto_id[$key],
                'cantidad'=>$request->cantidad[$key],
                'precio'=>$request->precio[$key]
            );
        }

        $compra->detalleCompra ()->createMany($results);
        
        return redirect()->route('compras.index');
    }
    public function show(Compra $compra)
    {
        return view('compras.show', compact('compra'));
    }
    public function edit(Compra $compra)
    {
        return view('compras.edit', compact('compra'));
    }
    public function update(UpdateRequest $request, Compra $compra)
    {
        // $compra->update($request->all());
        // return redirect()->route('compras.index');
    }
    public function destroy(Compra $compra)
    {
        // $compra->delete();
        // return redirect()->route('compras.index');
    }
}
