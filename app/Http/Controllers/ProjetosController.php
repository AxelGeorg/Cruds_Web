<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetosController extends Controller
{
    public function index()
    {
        $projetos = Projeto::all();
        return view('Projeto', compact('projetos'));
    }

    public function create()
    {
        return view('novoprojeto');
    }

    public function store(Request $request)
    {
        $regras = [
            'nome'             => 'required|min:4|max:25',
            'estimativa_horas' => 'required|min:1|max:6' ,
        ];

        $mensagens = [
            'required'                  => 'O atributo :attribute não estar em branco.'              ,
            'nome.required'             => 'O nome é requirido.'                                     , 
            'nome.min'                  => 'É necessário no mínimo 4 caracteres no nome.'            ,
            'nome.max'                  => 'É permitido até 25 caracteres no nome.'                  ,
            'estimativa_horas.required' => 'O estimativa_horas é requirido.'                         ,
            'estimativa_horas.min'      => 'É necessário no mínimo 1 digito para o estimativa_horas.',
            'estimativa_horas.max'      => 'É permitido até 6 digitos no estimativa_horas.'          ,
        ];
        
        $request->validate($regras, $mensagens);

        $proj = new Projeto();
        $proj->nome             = $request->input('nome'            );
        $proj->estimativa_horas = $request->input('estimativa_horas');
        $proj->save();
        return redirect('/projetos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $proj = Projeto::find($id);
        if(isset($proj))
        {
            return view('editarprojeto', compact('proj'));
        }
        return redirect('/projetos');
    }

    public function update(Request $request, $id)
    {
        $proj = Projeto::find($id);
        if(isset($proj))
        {
            $regras = [
                'nome'             => 'required|min:4|max:25',
                'estimativa_horas' => 'required|min:1|max:6' ,
            ];
    
            $mensagens = [
                'required'                  => 'O atributo :attribute não estar em branco.'              ,
                'nome.required'             => 'O nome é requirido.'                                     , 
                'nome.min'                  => 'É necessário no mínimo 4 caracteres no nome.'            ,
                'nome.max'                  => 'É permitido até 25 caracteres no nome.'                  ,
                'estimativa_horas.required' => 'O estimativa_horas é requirido.'                         ,
                'estimativa_horas.min'      => 'É necessário no mínimo 1 digito para o estimativa_horas.',
                'estimativa_horas.max'      => 'É permitido até 6 digitos no estimativa_horas.'          ,
            ];
            
            $request->validate($regras, $mensagens);
    
            $proj->nome             = $request->input('nome'            );
            $proj->estimativa_horas = $request->input('estimativa_horas');
            $proj->save();
        }
        return redirect('/projetos');
    }

    public function destroy($id)
    {
        $proj = Projeto::find($id);

        if(isset($proj))
        {
            $proj->delete();
            return redirect('/projetos');
        }
    }
}
