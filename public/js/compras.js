$(function(){
    $("#agregar").click(function(){
        agregar();
    });
});
var cont = 0;
total = 0;
subtotal = [];
$("#guardar").hide();
function agregar(){
    producto_id = $("#producto_id").val();
    producto = $("#producto_id option:selected").text();
    cantidad = $("#cantidad").val();
    precio = $("#precio").val();
    impuesto = $("#impuesto").val();
    if(producto_id != "" && cantidad != "" && cantidad >0 && precio != ""){
        subtotal[cont]=cantidad*precio;
        total=total+ subtotal[cont];
        var fila = '<tr class="selected" id="fila'+cont+'"><td><button type ="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class = "fa fa-times"></i></button></td><td><input type="hidden" name="producto_id[]" value = "'+producto_id+'">'+producto+'</td><td><input type="hidden" id="precio[]" name="precio[]" value="'+precio+'"><input type="number" class="form-control" id="precio[]" value="'+precio+'" disabled></td><td><input type="hidden" name="cantidad[]" value="'+cantidad+'"><input type="number" class="form-control" value="'+cantidad+'" disabled></td><td align ="right">S/'+subtotal[cont]+'</td></tr>';
        cont++;
        limpiar();
        totales();
        evaluar();
        $("#detalles").append(fila);
    }else {
        // Swal.fire({
        //     type:'error',
        //     text:'LLenar todos los campos del detalle de compra'
        // })
        alert('llega');
    }
}

function limpiar(){
    $("#cantidad").val("");
    $("#precio").val("");
}

function totales(){
    $("#total").html("PEN"+total.toFixed(2));
    total_impuesto = total*impuesto/100;
    total_pagar = total+total_impuesto;
    $("#total_impuesto").html("PEN"+total_impuesto.toFixed(2));
    $("#total_pagar_html").html("PEN"+total_pagar.toFixed(2));
    $("#total_pagar").val(total_pagar.toFixed(2));

}

function evaluar(){
    if(total > 0){
        $("#guardar").show();
    }else{
        $("#guardar").hide();
    }
}

function eliminar(index){
    total = total-subtotal[index];
    total_impuesto = total * impuesto/100;
    total_pagar_html = total + total_impuesto;
    $("#total").html("PEN"+total);
    $("#total_impuesto").html("PEN"+total_impuesto);
    $("#total_pagar_html").html("PEN"+total_pagar_html);
    $("#total_pagar").val(total_pagar_html.toFixed(2));
    $("#fila"+index).remove();
    evaluar();
}
