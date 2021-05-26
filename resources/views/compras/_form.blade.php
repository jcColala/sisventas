<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="producto" class="">Producto</label>
            <select class="multiselect-dropdown form-control" name="producto_id" id="producto_id">
                <optgroup label="Producto">
                    <option value="">Seleccionar</option>
                    @foreach ($productos as $item)
                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                    @endforeach
                </optgroup>
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="proveedor" class="">Proveedor</label>
            <select class="multiselect-dropdown form-control" name="proveedor_id" id="proveedor_id">
                <optgroup label="Proveedor">
                    <option value="">Seleccionar</option>
                    @foreach ($proveedors as $item)
                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                    @endforeach
                </optgroup>
            </select>
        </div>
    </div>
    
    
</div>
<div class="form-row">
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="cantidad" class="">Cantidad :</label>
            <input name="cantidad" id="cantidad" placeholder="300" type="number" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="impuesto" class="">Impuesto :</label>
            <input name="impuesto" id="impuesto" placeholder="%30" type="number" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="precio" class="">Precio compra:</label>
            <input name="precio" id="precio" placeholder="Precio compra ..." type="number" class="form-control">
        </div>
    </div> 
</div>
<div class="form-group clearfix">
    <button type="button" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary" id="agregar">Agregar</button>
</div>




<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Detalle de compra
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="detalles">
                    <thead>
                        <tr>
                            <th>Eliminar</th>
                            <th>Producto</th>
                            <th>Precio(PEN)</th>
                            <th>Cantidad</th>
                            <th>Subtotal(PEN)</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th colspan="4">
                                <P align="right">TOTAL:</P>
                            </th>
                            <th>
                                <p align="right"><span id="total">PEN 0.00 </span></p>
                            </th>
                        </tr>
                        <tr id="dvOcultar">
                            <th colspan="4">
                                <p align="right">TOTAL IMPUESTO (18%):</p>
                            </th>
                            <th>
                                <p align="right"><span id="total_impuesto">PEN 0.00 </span></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4">
                                <p align="right">TOTAL PAGAR:</p>
                            </th>
                            <th>
                                <p align="right"><span align="right" id="total_pagar_html">PEN 0.00</span><input type="hidden" name="total" id="total_pagar"></p>
                            </th>
                        </tr>
                    </tfoot>
                    <tbody>
                    </tbody>
                </table>
            </div>
            {{-- <div class="d-block text-center card-footer">
                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger">
                    <i class="pe-7s-trash btn-icon-wrapper"> </i>
                </button>
                <button class="btn-wide btn btn-success">Save</button>
            </div> --}}
        </div>
    </div>
</div>



{{-- <div class="form-group">

    <h5 class="card-title">Detalle de compra</h5>
    <div class="card-body">
        <table style="width: 100%;" id="detalles" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>Eliminar</th>
                    <th>Producto</th>
                    <th>Precio(PEN)</th>
                    <th>Cantidad</th>
                    <th>Subtotal(PEN)</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan="4">
                        <P align="right">TOTAL:</P>
                    </th>
                    <th>
                        <p align="right"><span id="total">PEN 0.00</span></p>
                    </th>
                </tr>
                <tr id="dvOcultar">
                    <th colspan="4">
                        <p align="right">TOTAL IMPUESTO (18%)</p>
                    </th>
                    <th>
                        <p align="right"><span id="total_impuesto">PEN 0.00</span></p>
                    </th>
                </tr>
                <tr>
                    <th colspan="4">
                        <p align="right">TOTAL PAGAR:</p>
                    </th>
                    <th>
                        <p align="right"><span align="right" id="total_pagar_html">PEN 0.00</span><input type="hidden" name="total" id="total_pagar"></p>
                    </th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                </tr>
               
            </tbody>
            
        </table>
    </div>
</div> --}}