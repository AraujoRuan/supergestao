<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        
        $contato = new SiteContato();
        $contato->nome = 'Sitems Sg';
        $contato->telefone = '(22)981498426';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contato = '1';
        $contato->mensagem = 'Seja Bem-Vindo ao Sitema Super Gestão ';
        $contato->save();
        
       // \App\Models\SiteContato::factory(10)->create();
       SiteContato::factory(10)->create();
    }
}
