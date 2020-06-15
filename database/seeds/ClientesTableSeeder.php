<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
    		factory(App\Cliente::class,10)->create()->each(function($u){
    			$u->telefones()->save(factory(App\Telefone::class)->make());	
    		});

    }
}