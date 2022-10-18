<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'hpss' => '0',
                'ddd' => '11',//São Paulo (SP)
                'telefone' => '997386541'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'hpss' => null,
                'ddd' => '55', //Fortaleza (CE)
                'telefone' => '997386541'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'hpss' => null,
                'ddd' => '77',//Juíz de Fora (MG)
                'telefone' => '997386541'
            ]
        ];

        $fornecedores = [];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
