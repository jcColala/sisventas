<?php
namespace App\Http\Controllers;
use App\Http\Requests\Proveedor\StoreRequest;
use App\Http\Requests\Proveedor\UpdateRequest;
use App\Models\Proveedor;
use Illuminate\Http\Request;
class ProveedorController extends Controller
{
    public function index()
    {
        $proveedors =Proveedor::get();
        return view('proveedors.index', compact('proveedors'));
    }
    public function create()
    {
        return view('proveedors.create');
    }
    public function store(StoreRequest $request)
    {
        Proveedor::create($request->all());
        return redirect()->route('proveedors.index');
    }
    public function show(Proveedor $proveedor)
    {
        return view('proveedors.show', compact('proveedor'));
    }
    public function edit(Proveedor $proveedor)
    {
        return view('proveedors.edit', compact('proveedor'));
    }
    public function update(UpdateRequest $request, Proveedor $proveedor)
    {
        $proveedor->update($request->all());
        return redirect()->route('proveedors.index');
    }
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedors.index');
    }
}

