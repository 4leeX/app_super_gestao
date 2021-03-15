<?php

use App\Fornecedor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor100';
        $fornecedor->site = 'www.fornecedor100.com';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@yahoo.com.br';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'www.blau.com.br',
            'uf' => 'SP',
            'email' => 'contatofolalalal@gmail.com'
        ]);

        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'www.blau3.com.br',
            'uf' => 'PI',
            'email' => 'zazau@gmail.com'
        ]);

    }
}
