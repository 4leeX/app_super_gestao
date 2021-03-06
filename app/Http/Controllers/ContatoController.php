<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request){

        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // echo $request->input('nome');

        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');

        //print_r($contato->getAttributes());
        // $contato->save();

        // $contato = new SiteContato();
        // $contato = new SiteContato();
        // $contato->save();
        // print_r($contato->getAttributes());

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){

        $regras = [
            'nome' => 'required|min:3|max:100|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            'nome.min' => '* O campo nome precisa ter no mínimo 3 caracteres.',
            'nome.max' => '* O campo nome deve ter no máximo 100 caracteres.',
            'nome.unique' => '* O nome informado já está em uso!',

            'email.email' => '* O email informado não é válido!',

            'mensagem.max' => '* A mensagem deve ter no máximo 2000 caracteres.',

            'required' => '* O campo :attribute deve ser preenchido!'
        ];

        //realizar a validação dos dados do formulário recebidos no requerimento
        $request->validate($regras, $feedback);

        SiteContato::create($request->all());
        return redirect()->route('site.index');


    }
}
