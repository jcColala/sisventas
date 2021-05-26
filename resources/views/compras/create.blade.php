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
                    <div>Nueva compra
                        <div class="page-title-subheading">Realizar nueva compra.</div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <a type="button" href="{{route('compras.index')}}" data-toggle="tooltip" title="ver compras" data-placement="bottom"
                        class="mb-2 mr-2 btn-hover-shine btn btn-success">Ver compras 
                        <i class="fa fa-plus-square"></i>
                    </a>
                </div>     
            </div>
        </div>        
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form id="compras" class="col-md-12 mx-auto" method="POST" action="{{route('compras.store')}}">
                            @csrf
                            @include('compras/_form')
                            
                            <div class="card-footer text-muthed">
                                <button type="submit" class="mb-2 mr-2 btn-hover-shine btn btn-alternate" value="comprar" id="guardar">Comprar</button>
                                <a type="submit" href="{{route('compras.index')}}"  class="mb-2 mr-2 btn-hover-shine btn btn-light" name="cancelar" value="Cancelar">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

<script type="text/javascript" src="{{asset('js/compras.js')}}"></script>
<script type="text/javascript" src="{{asset('js/alerts.js')}}"></script>
<script type="text/javascript" src="{{asset('js/avgrund.js')}}"></script>
    
@endsection
