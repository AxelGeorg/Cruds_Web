<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function index()
    {
        $enderecos = Endereco::all();
        return view('Endereco', compact('enderecos'));
    }

    public function create()
    {
        return view('novoendereco');
    }

    public function store(Request $request)
    {
        $regras = [
            'rua'    => 'required|min:1|max:100',
            'numero' => 'required|min:1|max:7'  ,
            'bairro' => 'required|min:6|max:50' ,
            'cidade' => 'required|min:1|max:50' ,
            'uf'     => 'required|min:1|max:50' ,
            'cep'    => 'required|min:6|max:15' ,
        ];

        $mensagens = [
            'required'        => 'O atributo :attribute não pode estar em branco.',
            'rua.required'    => 'A rua é requirida.'                             ,
            'rua.min'         => 'É necessário no mínimo 1 caracter na rua.'      ,
            'rua.max'         => 'É permitido até 100 caracteres na rua.'         ,
            'numero.required' => 'O numero é requirido.'                          ,
            'numero.min'      => 'É necessário no mínimo 1 digito para o numero.' ,
            'numero.max'      => 'É permitido até 7 digitos no numero.'           ,
            'bairro.required' => 'O bairro é requirido.'                          ,
            'bairro.min'      => 'É necessário no mínimo 6 caracteres no bairro.' ,
            'bairro.max'      => 'É permitido até 50 caracteres no bairro.'       ,
            'cidade.required' => 'A cidade é requirida.'                          ,
            'cidade.min'      => 'É necessário no mínimo 1 caracter na cidade.'   ,
            'cidade.max'      => 'É permitido até 50 caracteres na cidade.'       ,
            'uf.required'     => 'A uf é requirida.'                              ,
            'uf.min'          => 'É necessário no mínimo 1 caracter na uf.'       ,
            'uf.max'          => 'É permitido até 50 caracteres na uf.'           ,
            'cep.required'    => 'O cep é requirido.'                             ,
            'cep.min'         => 'É necessário no mínimo 6 caracteres no cep.'    ,
            'cep.max'         => 'É permitido até 15 caracteres no cep.'          ,
        ];
        
        $request->validate($regras, $mensagens);

        $end = new Endereco();
        $end->rua    = $request->input('rua'   );
        $end->numero = $request->input('numero');
        $end->bairro = $request->input('bairro');
        $end->cidade = $request->input('cidade');
        $end->uf     = $request->input('uf'    );
        $end->cep    = $request->input('cep'   );
        $end->save();
        return redirect('/enderecos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $end = Endereco::find($id);
        if(isset($end))
        {
            return view('editarendereco', compact('end'));
        }
        return redirect('/enderecos');
    }

    public function update(Request $request, $id)
    {
        $end = Endereco::find($id);
        if(isset($end))
        {
            $regras = [
                'rua'    => 'required|min:1|max:100',
                'numero' => 'required|min:1|max:7'  ,
                'bairro' => 'required|min:6|max:50' ,
                'cidade' => 'required|min:1|max:50' ,
                'uf'     => 'required|min:1|max:50' ,
                'cep'    => 'required|min:6|max:15' ,
            ];
    
            $mensagens = [
                'required'        => 'O atributo :attribute não pode estar em branco.',
                'rua.required'    => 'A rua é requirida.'                             ,
                'rua.min'         => 'É necessário no mínimo 1 caracter na rua.'      ,
                'rua.max'         => 'É permitido até 100 caracteres na rua.'         ,
                'numero.required' => 'O numero é requirido.'                          ,
                'numero.min'      => 'É necessário no mínimo 1 digito para o numero.' ,
                'numero.max'      => 'É permitido até 7 digitos no numero.'           ,
                'bairro.required' => 'O bairro é requirido.'                          ,
                'bairro.min'      => 'É necessário no mínimo 6 caracteres no bairro.' ,
                'bairro.max'      => 'É permitido até 50 caracteres no bairro.'       ,
                'cidade.required' => 'A cidade é requirida.'                          ,
                'cidade.min'      => 'É necessário no mínimo 1 caracter na cidade.'   ,
                'cidade.max'      => 'É permitido até 50 caracteres na cidade.'       ,
                'uf.required'     => 'A uf é requirida.'                              ,
                'uf.min'          => 'É necessário no mínimo 1 caracter na uf.'       ,
                'uf.max'          => 'É permitido até 50 caracteres na uf.'           ,
                'cep.required'    => 'O cep é requirido.'                             ,
                'cep.min'         => 'É necessário no mínimo 6 caracteres no cep.'    ,
                'cep.max'         => 'É permitido até 15 caracteres no cep.'          ,
            ];
            
            $request->validate($regras, $mensagens);
    
            $end->rua    = $request->input('rua'   );
            $end->numero = $request->input('numero');
            $end->bairro = $request->input('bairro');
            $end->cidade = $request->input('cidade');
            $end->uf     = $request->input('uf'    );
            $end->cep    = $request->input('cep'   );
            $end->save();
        }
        return redirect('/enderecos');
    }

    public function destroy($id)
    {
        $end = Endereco::find($id);

        //verificar se há clientes com esse endereco

        if(isset($end))
        {
            $end->delete();
            return redirect('/enderecos');
        }
    }
}
