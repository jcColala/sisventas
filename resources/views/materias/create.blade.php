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
                    <div>Nuevo Materia Prima
                        <div class="page-title-subheading">Agregar nueva materia prima.</div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <a type="button" href="{{route('materias.index')}}" data-toggle="tooltip" title="ver materias" data-placement="bottom"
                        class="mb-2 mr-2 btn-hover-shine btn btn-success">Ver materias primas 
                        <i class="fa fa-plus-square"></i>
                    </a>
                </div>     
            </div>
        </div>        
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form id="materias" class="col-md-10 mx-auto" method="POST" action="{{route('materias.store')}}">
                            @csrf
                            @include('materias/_form')
                            
                            <div class="form-group" align="center">
                                <button type="submit" class="mb-2 mr-2 btn-hover-shine btn btn-alternate" value="registrar">Registrar</button>
                                <a type="submit" href="{{route('materias.index')}}"  class="mb-2 mr-2 btn-hover-shine btn btn-light" name="cancelar" value="Cancelar">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

<script type="text/javascript" src="{{asset('js/materias.js')}}"></script>

    
@endsection
