<?php

namespace App\Http\Controllers;

use App\Models\Desenvolvedor;
use Illuminate\Http\Request;

class DesenvolvedorController extends Controller
{
    public function index()
    {
        $desenvolvedores = Desenvolvedor::all();
        return view('Desenvolvedor', compact('desenvolvedores'));
    }

    public function create()
    {
        return view('novodesenvolvedor');
    }

    public function store(Request $request)
    {
        $regras = [
            'nome'  => 'required|min:4|max:25',
            'cargo' => 'required|min:1|max:25',
        ];

        $mensagens = [
            'required'       => 'O atributo :attribute não pode estar em branco.',
            'nome.required'  => 'O nome é requirido.',
            'nome.min'       => 'É necessário no mínimo 4 caracteres no nome.',
            'nome.max'       => 'É permitido até 25 caracteres no nome.',
            'cargo.required' => 'O cargo é requirido.',
            'cargo.min'      => 'É necessário no mínimo 4 caracteres no cargo.',
            'cargo.max'      => 'É permitido até 25 caracteres no cargo.',
        ];

        $request->validate($regras, $mensagens);

        $dev = new Desenvolvedor();
        $dev->nome  = $request->input('nome' );
        $dev->cargo = $request->input('cargo');
        $dev->save();
        return redirect('/desenvolvedores');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $dev = Desenvolvedor::find($id);
        if (isset($dev)) {
            return view('editardesenvolvedor', compact('dev'));
        }
        return redirect('/desenvolvedores');
    }

    public function update(Request $request, $id)
    {
        $dev = Desenvolvedor::find($id);
        if (isset($dev)) {
            $regras = [
                'nome'  => 'required|min:4|max:25',
                'cargo' => 'required|min:1|max:25',
            ];

            $mensagens = [
                'required'       => 'O atributo :attribute não pode estar em branco.',
                'nome.required'  => 'O nome é requirido.',
                'nome.min'       => 'É necessário no mínimo 4 caracteres no nome.',
                'nome.max'       => 'É permitido até 25 caracteres no nome.',
                'cargo.required' => 'O cargo é requirido.',
                'cargo.min'      => 'É necessário no mínimo 4 caracteres no cargo.',
                'cargo.max'      => 'É permitido até 25 caracteres no cargo.',
            ];

            $request->validate($regras, $mensagens);

            $dev->nome  = $request->input('nome' );
            $dev->cargo = $request->input('cargo');
            $dev->save();
        }
        return redirect('/desenvolvedores');
    }

    public function destroy($id)
    {
        $dev = Desenvolvedor::find($id);

        if (isset($dev)) {
            $dev->delete();
            return redirect('/desenvolvedores');
        }
    }
}
