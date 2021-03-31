<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pessoa;
use App\Http\Requests\PessoaRequest;

class PessoasController extends Controller
{

    public function index()
    {
        $pessoa = Pessoa::All();
        return view('pessoa.index', compact('pessoa'));
    }


    public function create()
    {
        $pessoa = Pessoa::All();
        return view('pessoa.create', compact('pessoa'));
    }


    public function store(PessoaRequest $request)
    {
        $pessoa = new Pessoa();
        $pessoa->nome = $request->input('nome');
        $pessoa->sobrenome = $request->input('sobrenome');
        $pessoa->telefone = $request->input('telefone');
        $pessoa->save();
        return redirect()->route('pessoa.index', compact('pessoa'));
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pessoa = Pessoa::find($id);
        if(isset($pessoa)){
            return view('pessoa.edit', compact('pessoa'));
        }
            return view('pessoa.index');
    }

    public function update(PessoaRequest $request, $id)
    {
        $pessoa = Pessoa::find($id);
        if (isset($pessoa)) {
            $pessoa->nome = $request->input('nome');
            $pessoa->sobrenome = $request->input('sobrenome');
            $pessoa->telefone = $request->input('telefone');
            $pessoa->save();
        }
            return redirect()->route('pessoa.index', compact('pessoa'));
    }

    public function destroy($id)
    {
        $pessoa = Pessoa::find($id);
        if (isset($pessoa)) {
            $pessoa->delete();
        }
            return redirect()->route('pessoa.index');

    }
}
