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
                    <div>Nuevo cliente
                        <div class="page-title-subheading">Agregar nuevo cliente.</div>
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
                        <form id="clientes" class="col-md-10 mx-auto" method="POST" action="{{route('clientes.store')}}">
                            @csrf
                            @include('clientes/_form')
                            
                            <div class="form-group" align="center">
                                <button type="submit" class="mb-2 mr-2 btn-hover-shine btn btn-alternate" value="registrar">Registrar</button>
                                <a type="submit" href="{{route('clientes.index')}}"  class="mb-2 mr-2 btn-hover-shine btn btn-light" name="cancelar" value="Cancelar">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection