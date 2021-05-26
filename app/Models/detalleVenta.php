<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalleVenta extends Model
{
    protected $fillable=[
        'venta_id',
        'producto_id',
        'cantidad',
        'precio',
        'descuento'
    ];

    public function producto(){
        return $this->belongsTo(Producto::class);
    }

}
