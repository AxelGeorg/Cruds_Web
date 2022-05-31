<?php

namespace App\Http\Controllers;

use App\Models\Alocacao;
use App\Models\Projeto;
use Illuminate\Http\Request;

class AlocacaoController extends Controller
{
    public function index()
    {
        $alocacaos = Alocacao::all();
        return view('Alocacao', compact('alocacaos'));
    }

    public function create()
    {
        return view('novoalocacao');
    }

    public function store(Request $request)
    {
        $regras = [
            'desenvolvedor_id' => 'required|min:1|max:7',
            'projeto_id'       => 'required|min:1|max:7',
            'horas_semanais'   => 'required|min:1|max:4',
        ];

        $mensagens = [
            'required'                   => 'O atributo :attribute não pode estar em branco.'     ,
            'desenvolvedor_id.required'  => 'O desenvolvedor_id é requirido.'                     ,
            'desenvolvedor_id.min'       => 'É necessário no mínimo 1 digito no desenvolvedor_id.',
            'desenvolvedor_id.max'       => 'É permitido até 7 digitos no desenvolvedor_id.'      ,
            'projeto_id.required'        => 'O projeto_id é requirido.'                           ,
            'projeto_id.min'             => 'É necessário no mínimo 1 digito no projeto_id.'      ,
            'projeto_id.max'             => 'É permitido até 7 digitos no projeto_id.'            ,
            'horas_semanais.required'    => 'O horas_semanais é requirido.'                       ,
            'horas_semanais.min'         => 'É necessário no mínimo 1 digito no horas_semanais.'  ,
            'horas_semanais.max'         => 'É permitido até 4 digitos no horas_semanais.'        ,
        ];

        $request->validate($regras, $mensagens);

        $alo = new Alocacao();
        $alo->desenvolvedor_id = $request->input('desenvolvedor_id');
        $alo->projeto_id       = $request->input('projeto_id'      );
        $alo->horas_semanais   = $request->input('horas_semanais'  );
        $alo->save();
        return redirect('/alocacaos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $alo = Alocacao::find($id);
        if (isset($alo)) {
            return view('editaralocacao', compact('alo'));
        }
        return redirect('/alocacaos');
    }

    public function update(Request $request, $id)
    {
        $alo = Alocacao::find($id);
        if (isset($alo)) {
            $regras = [
                'desenvolvedor_id' => 'required|min:1|max:7',
                'projeto_id'       => 'required|min:1|max:7',
                'horas_semanais'   => 'required|min:1|max:4',
            ];
    
            $mensagens = [
                'required'                   => 'O atributo :attribute não pode estar em branco.'     ,
                'desenvolvedor_id.required'  => 'O desenvolvedor_id é requirido.'                     ,
                'desenvolvedor_id.min'       => 'É necessário no mínimo 1 digito no desenvolvedor_id.',
                'desenvolvedor_id.max'       => 'É permitido até 7 digitos no desenvolvedor_id.'      ,
                'projeto_id.required'        => 'O projeto_id é requirido.'                           ,
                'projeto_id.min'             => 'É necessário no mínimo 1 digito no projeto_id.'      ,
                'projeto_id.max'             => 'É permitido até 7 digitos no projeto_id.'            ,
                'horas_semanais.required'    => 'O horas_semanais é requirido.'                       ,
                'horas_semanais.min'         => 'É necessário no mínimo 1 digito no horas_semanais.'  ,
                'horas_semanais.max'         => 'É permitido até 4 digitos no horas_semanais.'        ,
            ];
    
            $request->validate($regras, $mensagens);

            $alo->desenvolvedor_id = $request->input('desenvolvedor_id');
            $alo->projeto_id       = $request->input('projeto_id'      );
            $alo->horas_semanais   = $request->input('horas_semanais'  );
            $alo->save();
        }
        return redirect('/alocacaos');
    }

    public function destroy($id)
    {
        $alo = Alocacao::find($id);

        if (isset($alo)) {
            $alo->delete();
            return redirect('/alocacaos');
        }
    }
}
