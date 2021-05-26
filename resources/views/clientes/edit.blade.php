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
                    <div>Editar cliente
                        <div class="page-title-subheading">Editar cliente.</div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <a type="button" href="{{route('clientes.index')}}" data-toggle="tooltip" title="ver clientes" data-placement="bottom"
                        class="mb-2 mr-2 btn-hover-shine btn btn-success">Ver clientes 
                        <i class="fa fa-plus-square"></i>
                    </a>
                </div>     
            </div>
        </div>        
        
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form id="clientes" class="col-md-10 mx-auto" method="POST" action="{{route('clientes.update', $cliente)}}">
                            @csrf
                            @method('put')
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="nombres" class="">Nombres</label>
                                        <input name="nombre" id="nombre" placeholder="Nombres ..." type="text" class="form-control" value="{{$cliente->nombre}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="email" class="">Email</label>
                                        <input name="email" id="email" placeholder="ejemplo@gmail.com" type="email" class="form-control" value="{{$cliente->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="dni" class="">N° Dni</label>
                                        <input name="dni" id="dni" placeholder="Dni ..." type="number" class="form-control" value="{{$cliente->dni}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="ruc" class="">Numero ruc</label>
                                        <input name="ruc" id="ruc" placeholder="Ruc ..." type="number" class="form-control" value="{{$cliente->ruc}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="telefono" class="">Teléfono</label>
                                        <input name="telefono" id="telefono" placeholder="Telefono ..." type="number" class="form-control" value="{{$cliente->telefono}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <div>
                                    <textarea rows="1" class="form-control autosize-input" name="direccion" id="direccion" style="height: 35px;" placeholder="Direccion ...">{{$cliente->direccion}}</textarea>
                                </div>
                            </div>
                            
                            <div class="form-group" align="center">
                                <button type="submit" class="mb-2 mr-2 btn-hover-shine btn btn-alternate" value="registrar">Actualizar</button>
                                <a type="submit" href="{{route('clientes.index')}}"  class="mb-2 mr-2 btn-hover-shine btn btn-light" name="cancelar" value="Cancelar">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection