@extends('includes/base')
@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>Compras
                        <div class="page-title-subheading">Listado genereal de compras.</div>
                    </div>
                </div>  
                <div class="page-title-actions">
                    <a type="button" href="{{route('compras.create')}}" data-toggle="tooltip" title="Nueva compra" data-placement="bottom"
                        class="mb-2 mr-2 btn-hover-shine btn btn-success">Nueva 
                        <i class="fa fa-plus-square"></i>
                    </a>
                </div>   
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                        class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Compras
                </div>
                <div class="btn-actions-pane-right actions-icon-btn">
                    <div class="btn-group dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            class="btn-icon btn-icon-only btn btn-link">
                            <i class="pe-7s-menu btn-icon-wrapper"></i>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                            </button>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                            </button>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                            </button>
                            <div tabindex="-1" class="dropdown-divider"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th style="width: 150px">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($compras as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->fecha_compra}}</td>
                                <td>{{$item->total}}</td>
                                <td>{{$item->estado}}</td>
                                <td>
                                    {{-- <form action="{{route('productos.destroy', $item->id)}}" method="POST"> --}}
                                        {{-- @csrf --}}
                                        {{-- @method('delete') --}}
                                        {{-- <a href="{{route('productos.edit', $item->id)}}" class="mb-2 mr-2 btn-icon btn-icon-only btn-pill btn btn-outline-warning"><i class="lnr-magic-wand btn-icon-wrapper"> </i></a> --}}

                                        {{-- <button type="submit" class="mb-2 mr-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button> --}}

                                        <a href="{{route('productos.edit', $item->id)}}" class="mb-2 mr-2 btn-icon btn-icon-only btn-pill btn btn-outline-success"><i class="lnr-file-empty btn-icon-wrapper"> </i></a>

                                        <a href="{{route('productos.edit', $item->id)}}" class="mb-2 mr-2 btn-icon btn-icon-only btn-pill btn btn-outline-info"><i class="lnr-printer btn-icon-wrapper"> </i></a>

                                        <a href="{{route('productos.edit', $item->id)}}" class="mb-2 btn-icon btn-icon-only btn-pill btn btn-outline-alternate"><i class="lnr-eye btn-icon-wrapper"> </i></a>

                                    {{-- </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

{{-- <script type="text/javascript" src="{{asset('js/producto.js')}}"></script> --}}

    
@endsection