@extends('includes/base')
@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="lnr-picture text-danger"></i>
                    </div>
                    <div>Editar producto
                        <div class="page-title-subheading">Editar producto.</div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <a type="button" href="{{route('productos.index')}}" data-toggle="tooltip" title="ver productos" data-placement="bottom"
                        class="mb-2 mr-2 btn-hover-shine btn btn-success">Ver productos 
                        <i class="fa fa-plus-square"></i>
                    </a>
                </div>     
            </div>
        </div>        
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form id="productos" class="col-md-10 mx-auto" method="POST" action="{{route('productos.update', $producto)}}">
                            @csrf
                            @method('put')
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="nombres" class="">Nombres</label>
                                        <input name="nombre" id="nombre" placeholder="Nombres ..." type="text" class="form-control" value="{{$producto->nombre}}">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="precio_venta" class="">Precio venta :</label>
                                        <input name="precio_venta" id="precio_venta" placeholder="Precio venta ..." type="number" class="form-control" value="{{$producto->precio_venta}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="ruc" class="">Categoría</label>
                                        <select class="multiselect-dropdown form-control" name="categoria_id" id="categoria_id" value="{{$producto->categoria_id}}">
                                            <optgroup label="Categorías">
                                                @foreach ($categorias as $item)
                                                    <option value="{{$item->id}}" @if ($producto->categoria_id == $item->id)
                                                        selected
                                                    @endif>{{$item->nombre}}</option>
                                                    
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="telefono" class="">Proveedor</label>
                                        <select class="multiselect-dropdown form-control" name="proveedor_id" id="proveedor_id" value="{{$producto->proveedor_id}}">
                                            <optgroup label="Categorías">
                                                @foreach ($proveedors as $item)
                                                    <option value="{{$item->id}}" @if ($producto->proveedor_id == $item->id)
                                                        selected
                                                    @endif>{{$item->nombre}}</option>
                                                    
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group" align="center">
                                <button type="submit" class="mb-2 mr-2 btn-hover-shine btn btn-alternate" value="registrar">Registrar</button>
                                <a type="submit" href="{{route('productos.index')}}"  class="mb-2 mr-2 btn-hover-shine btn btn-light" name="cancelar" value="Cancelar">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

{{-- <script type="text/javascript" src="{{asset('js/producto.js')}}"></script> --}}

    
@endsection
