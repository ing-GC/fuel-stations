<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'id' => 1,
            'name' => 'Aguascalientes',
        ]);

        State::create([
            'id' => 2,
            'name' => 'Baja California',
        ]);

        State::create([
            'id' => 3,
            'name' => 'Baja California Sur',
        ]);

        State::create([
            'id' => 4,
            'name' => 'Campeche',
        ]);

        State::create([
            'id' => 5,
            'name' => 'Chiapas',
        ]);

        State::create([
            'id' => 6,
            'name' => 'Chihuahua',
        ]);

        State::create([
            'id' => 7,
            'name' => 'Coahuila',
        ]);

        State::create([
            'id' => 8,
            'name' => 'Colima',
        ]);

        State::create([
            'id' => 9,
            'name' => 'Ciudad de México',
        ]);

        State::create([
            'id' => 10,
            'name' => 'Durango',
        ]);

        State::create([
            'id' => 11,
            'name' => 'State de México',
        ]);

        State::create([
            'id' => 12,
            'name' => 'Guanajuato',
        ]);

        State::create([
            'id' => 13,
            'name' => 'Guerrero',
        ]);

        State::create([
            'id' => 14,
            'name' => 'Hidalgo',
        ]);

        State::create([
            'id' => 15,
            'name' => 'Jalisco',
        ]);

        State::create([
            'id' => 16,
            'name' => 'Michoacán',
        ]);

        State::create([
            'id' => 17,
            'name' => 'Morelos',
        ]);

        State::create([
            'id' => 18,
            'name' => 'Nayarit',
        ]);

        State::create([
            'id' => 19,
            'name' => 'Nuevo León',
        ]);

        State::create([
            'id' => 20,
            'name' => 'Oaxaca',
        ]);

        State::create([
            'id' => 21,
            'name' => 'Puebla',
        ]);

        State::create([
            'id' => 22,
            'name' => 'Querétaro',
        ]);

        State::create([
            'id' => 23,
            'name' => 'Quintana Roo',
        ]);

        State::create([
            'id' => 24,
            'name' => 'San Luis Potosí',
        ]);

        State::create([
            'id' => 25,
            'name' => 'Sinaloa',
        ]);

        State::create([
            'id' => 26,
            'name' => 'Sonora',
        ]);

        State::create([
            'id' => 27,
            'name' => 'Tabasco',
        ]);

        State::create([
            'id' => 28,
            'name' => 'Tamaulipas',
        ]);

        State::create([
            'id' => 29,
            'name' => 'Tlaxcala',
        ]);

        State::create([
            'id' => 30,
            'name' => 'Veracruz',
        ]);

        State::create([
            'id' => 31,
            'name' => 'Yucatán',
        ]);

        State::create([
            'id' => 32,
            'name' => 'Zacatecas',
        ]);
    }
}
