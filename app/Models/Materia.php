<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable=[
        'codigo',
        'descripcion',
        'stock',
        'cantidad',
        'precio_compra',
        'importe',
        'estado',
        'categoria_id',
        'proveedor_id'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }
}
