<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable=[
        'cliente_id',
        'user_id',
        'fecha_venta',
        'impuesto',
        'total',
        'estado'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function detalleVenta(){
        return $this->hasMany(DetalleVenta::class);
    }
}
