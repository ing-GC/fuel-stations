<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FuelStation extends Model
{
    use HasFactory;

    protected $table = "fuel_stations";

    protected $fillable = [
        'uuid',
        'rfc',
        'razon_social',
        'date_insert',
        'numero_permiso',
        'fecha_aplicacion',
        'permiso_id',
        'longitude',
        'latitude',
        'codigo_postal',
        'calle',
        'colonia',
        'municipio',
        'estado',
        'regular',
        'premium',
    ];

    public function municipality()
    {
        return $this->belongsTo(Municipality::class, 'municipio');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'estado');
    }
}
