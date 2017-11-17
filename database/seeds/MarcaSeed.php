<?php

use Illuminate\Database\Seeder;
use OfSystem\Marca;

class MarcaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create(['marca' => 'CHEVROLET', 'origem' => 'N']);
        Marca::create(['marca' => 'VOLKSVAGEM', 'origem' => 'N']);
        Marca::create(['marca' => 'FORD', 'origem' => 'N']);
        Marca::create(['marca' => 'FIAT', 'origem' => 'N']);
        Marca::create(['marca' => 'RENAULT', 'origem' => 'N']);
        Marca::create(['marca' => 'CITROEN', 'origem' => 'N']);
        Marca::create(['marca' => 'PEGEOT', 'origem' => 'N']);
        Marca::create(['marca' => 'NISSAN', 'origem' => 'N']);
    }
}
