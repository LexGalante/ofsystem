<?php

use Illuminate\Database\Seeder;
use OfSystem\Cor;

class CorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cor::create(['cor' => 'BRANCO']);
        Cor::create(['cor' => 'PRETO']);
        Cor::create(['cor' => 'PRATA']);
        Cor::create(['cor' => 'VERMELHO']);
        Cor::create(['cor' => 'AZUL']);
        Cor::create(['cor' => 'CINZA']);
        Cor::create(['cor' => 'AMARELO']);
        Cor::create(['cor' => 'VERDE']);
        Cor::create(['cor' => 'PRETO']);
    }
}
