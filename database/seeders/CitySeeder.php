<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create([
            'name'=>'Corrientes'
        ]);
        City::create([
            'name'=>'Misiones'
        ]);
        City::create([
            'name'=>'Entre Rios'
        ]);
        City::create([
            'name'=>'Buenos Aires'
        ]);
        City::create([
            'name'=>'Ciudad Autónoma de Buenos Aires'
        ]);
        City::create([
            'name'=>'Córdoba'
        ]);
        City::create([
            'name'=>'Catamarca'
        ]);
       
        City::create([
            'name'=>'Chaco'
        ]);
       
        City::create([
            'name'=>'Chubut'
        ]);
       
        City::create([
            'name'=>'Formosa'
        ]);
       
        City::create([
            'name'=>'Jujuy'
        ]);
       
        City::create([
            'name'=>'La Pampa'
        ]);
       
        City::create([
            'name'=>'La Rioja'
        ]);
       
        City::create([
            'name'=>'mendoza'
        ]);
       
        City::create([
            'name'=>'neuquén'
        ]);
       
        City::create([
            'name'=>'río negro'
        ]);
       
        City::create([
            'name'=>'salta'
        ]);
        City::create([
            'name'=>'San Juan'
        ]);
        City::create([
            'name'=>'San Luis'
        ]);
        City::create([
            'name'=>'Santa Cruz'
        ]);
        City::create([
            'name'=>'Santa Fe'
        ]);
        City::create([
            'name'=>'Santiago del Estero'
        ]);
        City::create([
            'name'=>'Tierra del Fuego, Antártida e Islas del
            Atlántico Sur'
        ]);
        City::create([
            'name'=>'Tucumán'
        ]);
    }
}
