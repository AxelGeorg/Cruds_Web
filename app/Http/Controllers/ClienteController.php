<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Endereco;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('Cliente', compact('clientes'));
    }

    public function create()
    {
        return view('novocliente');
    }

    public function store(Request $request)
    {
        $regras = [
            'nome'        => 'required|min:4|max:25'                      ,
            'endereco_id' => 'required|min:1|max:50'                      ,
            'idade'       => 'required|min:1|max:3'                       ,
            'email'       => 'required|min:6|max:50|unique:clientes|email',
        ];

        $mensagens = [
            'required'             => 'O atributo :attribute não estar em branco.'      ,
            'nome.required'        => 'O nome é requirido.'                             ,
            'nome.min'             => 'É necessário no mínimo 4 caracteres no nome.'    ,
            'nome.max'             => 'É permitido até 25 caracteres no nome.'          ,
            'endereco_id.required' => 'O id endereco é requirido.'                      ,
            'endereco_id.min'      => 'É necessário no mínimo 1 digito para o endereco.',
            'endereco_id.max'      => 'É permitido até 50 digitos no endereco.'         ,
            'idade.required'       => 'A idade é requirida.'                            ,
            'idade.min'            => 'É necessário no mínimo 1 caracteres na idade.'   ,
            'idade.max'            => 'É permitido até 3 caracteres na idade.'          ,
            'email.required'       => 'O email é requirido.'                            ,
            'email.min'            => 'É necessário no mínimo 6 caracteres no email.'   ,
            'email.max'            => 'É permitido até 50 caracteres no email.'         ,
            'email.unique'         => 'Este email já esta cadastro na base da dados.'   ,
            'email.email'          => 'O email está inválido.'                          ,
        ];
        
        $request->validate($regras, $mensagens);

        $cli = new Cliente();
        $cli->nome        = $request->input('nome'       );
        $cli->endereco_id = $request->input('endereco_id');
        $cli->idade       = $request->input('idade'      );
        $cli->email       = $request->input('email'      );
        $cli->save();
        return redirect('/clientes');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cli = Cliente::find($id);
        if(isset($cli))
        {
            return view('editarcliente', compact('cli'));
        }
        return redirect('/clientes');
    }

    public function update(Request $request, $id)
    {
        $cli = Cliente::find($id);
        if(isset($cli))
        {
            $regras = [
                'nome'        => 'required|min:4|max:25'                      ,
                'endereco_id' => 'required|min:1|max:50'                      ,
                'idade'       => 'required|min:1|max:3'                       ,
                'email'       => 'required|min:6|max:50|email',
            ];
    
            $mensagens = [
                'required'             => 'O atributo :attribute não estar em branco.'      ,
                'nome.required'        => 'O nome é requirido.'                             ,
                'nome.min'             => 'É necessário no mínimo 4 caracteres no nome.'    ,
                'nome.max'             => 'É permitido até 25 caracteres no nome.'          ,
                'endereco_id.required' => 'O id endereco é requirido.'                      ,
                'endereco_id.min'      => 'É necessário no mínimo 1 digito para o endereco.',
                'endereco_id.max'      => 'É permitido até 50 digitos no endereco.'         ,
                'idade.required'       => 'A idade é requirida.'                            ,
                'idade.min'            => 'É necessário no mínimo 1 caracteres na idade.'   ,
                'idade.max'            => 'É permitido até 3 caracteres na idade.'          ,
                'email.required'       => 'O email é requirido.'                            ,
                'email.min'            => 'É necessário no mínimo 6 caracteres no email.'   ,
                'email.max'            => 'É permitido até 50 caracteres no email.'         ,
                'email.email'          => 'O email está inválido.'                          ,
            ];
            
            $request->validate($regras, $mensagens);
    
            $cli->nome        = $request->input('nome'       );
            $cli->endereco_id = $request->input('endereco_id');
            $cli->idade       = $request->input('idade'      );
            $cli->email       = $request->input('email'      );
            $cli->save();
        }
        return redirect('/clientes');
    }

    public function destroy($id)
    {
        $cli = Cliente::find($id);

        if(isset($cli))
        {
            $cli->delete();
            return redirect('/clientes');
        }
    }
}
