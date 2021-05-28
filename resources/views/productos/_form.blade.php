<div class="form-row">

    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nombres" class="">Nombres</label>
            <input name="nombre" id="nombre" placeholder="Nombres ..." type="text" class="form-control">
        </div>
    </div>

    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="precio_venta" class="">Precio venta :</label>
            <input name="precio_venta" id="precio_venta" placeholder="Precio venta ..." type="number" class="form-control">
        </div>
    </div>

</div>

<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="ruc" class="">Categoría</label>
            <select class="multiselect-dropdown form-control" name="categoria_id" id="categoria_id">
                <optgroup label="Categorías">
                    @foreach ($categorias as $item)
                    <option value="">SELECCIONAR</option>
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                    @endforeach
                </optgroup>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="telefono" class="">Proveedor</label>
            <select class="multiselect-dropdown form-control" name="proveedor_id" id="proveedor_id">
                <optgroup label="Categorías">
                    @foreach ($proveedors as $item)
                    <option value="">SELECCIONAR</option>
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                    @endforeach
                </optgroup>
            </select>
        </div>
    </div>
</div>