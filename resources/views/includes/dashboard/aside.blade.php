<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>
                <li class="{{request()->routeIs('categorias.*') ? 'mm-active':''}} {{request()->routeIs('proveedors.*') ? 'mm-active':''}} {{request()->routeIs('materias.*') ? 'mm-active':''}}">
                    <a href="#" aria-expanded="true">
                        <i class="metismenu-icon pe-7s-browser"></i>Materia Prima
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('categorias.index')}}" class="{{request()->routeIs('categorias.*') ? 'mm-active':''}}">
                                <i class="metismenu-icon"></i> Categorias
                            </a>
                        </li>
                        <li>
                            <a href="{{route('proveedors.index')}}" class="{{request()->routeIs('proveedors.*') ? 'mm-active':''}}">
                                <i class="metismenu-icon"></i> Proveedor
                            </a>
                        </li>
                        <li>
                            <a href="{{route('materias.index')}}" class="{{request()->routeIs('materias.*') ? 'mm-active':''}}">
                                <i class="metismenu-icon"></i> Materia Prima
                            </a>
                        </li>
                        {{-- <li>
                            <a href="{{route('clientes.index')}}" >
                                <i class="metismenu-icon"></i> Clientes
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <li class="{{request()->routeIs('productos.*') ? 'mm-active':''}}">
                    <a href="#" aria-expanded="true">
                        <i class="metismenu-icon pe-7s-plugin"></i>Almacen
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('productos.index')}}" class="{{request()->routeIs('productos.*') ? 'mm-active':''}}" >
                                <i class="metismenu-icon"></i>Productos
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-plugin"></i>Compras
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('compras.index')}}" >
                                <i class="metismenu-icon"></i>Compras
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-plugin"></i>Ventas
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="apps-mailbox.html" >
                                <i class="metismenu-icon"></i>Ventas
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>