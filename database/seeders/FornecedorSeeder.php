<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Fornecedor;


class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objecto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'Fornecedor100.com.ao';
        $fornecedor->uf = 'LA';
        $fornecedor->email = 'contacto@fornecedor100.com.ao';
        $fornecedor->save();

        //O método create(atenção para o atributo fillable da classe)
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'fornecedor200.com.ao',
            'uf' => 'LA',
            'email' => 'contacto@fornecedor200.com.ao',
        ]);

        //insert 
        \DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'fornecedor300.com.ao',
            'uf' => 'LA',
            'email' => 'contacto@fornecedor300.com.ao',
        ]);
    }
}
