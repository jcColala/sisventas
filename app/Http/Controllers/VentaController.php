<?php

namespace App\Http\Controllers;

use App\Http\Requests\Venta\StoreRequest;
use App\Http\Requests\Venta\UpdateRequest;
use App\Models\Cliente;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas=Venta::get();
        return view('ventas.index', compact('ventas'));
    }
    public function create()
    {
        $clientes = Cliente::get();
        return view('ventas.create', compact('clientes'));
    }
    public function store(StoreRequest $request)
    {
        $venta = Venta::create($request->all());
        foreach($request->producto_id as $key=>$producto){
            $results[]=array(
                'producto_id'=>$request->producto_id[$key],
                'cantidad'=>$request->cantidad[$key],
                'precio'=>$request->precio[$key],
                'descuento'=>$request->descuento[$key]

            );
        }

        $venta->detalleVenta ()->createMany($results);
        
        return redirect()->route('ventas.index');
    }
    public function show(Venta $venta)
    {
        return view('ventas.show', compact('venta'));
    }
    public function edit(Venta $venta)
    {
        return view('ventas.show', compact('venta'));
    }
    public function update(UpdateRequest $request, Venta $venta)
    {
        // $Venta->update($request->all());
        // return redirect()->route('ventas.index');
    }
    public function destroy(Venta $venta)
    {
        // $venta->delete();
        // return redirect()->route('ventas.index');
    }
}
