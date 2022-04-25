<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\GasStation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GasStationSeeder extends Seeder
{
    private $request;

    public function __construct()
    {
        $this->request = Http::get('https://api.datos.gob.mx/v1/precio.gasolina.publico');
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->request->json('results') as $key => $value) {
            GasStation::create([
                'uuid' => $value['_id'],
                'rfc' => $value['rfc'],
                'razon_social' => $value['razonsocial'],
                'date_insert' => Carbon::parse($value['date_insert']),
                'numero_permiso' => $value['numeropermiso'],
                'fecha_aplicacion' => Carbon::parse($value['fechaaplicacion']) ?? null,
                'permiso_id' => $value['permisoid'] ?? null,
                'longitude' => $value['longitude'],
                'latitude' => $value['latitude'],
                'codigo_postal' => $value['codigopostal'],
                'calle' => $value['calle'],
                'colonia' => $value['colonia'],
                'regular' => $value['regular'],
                'premium' => $value['premium'],
            ]);
        }
    }
}
