<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContacto;

class ContactoController extends Controller
{
    public function contacto(Request $request) {
        
        return view('site.contacto', ['titulo' => 'Contacto (teste)']);

    }

    public function save(Request $request) {

        
        //Realizar a validação dos dados do formulário recebidos no request!
        /*$request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contacto' => 'required',
            'mensagem' => 'required',
        ]);
        */
        dd ($request);
        //SiteContacto::create($request->all());
    
    }
}
