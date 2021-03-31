<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Turma;
use App\Http\Requests\TurmaRequests;

class TurmaController extends Controller
{

    public function index()
    {
        $turma = Turma::All();
        return view('turma.index', compact('turma'));
    }


    public function create()
    {
        $turma = Turma::All();
        return view('turma.create', compact('turma'));
    }


    public function store(TurmaRequest $request)
    {
        $turma = new Turma();
        $turma->nome = $request->input('nome');
        $turma->descricao = $request->input('descricao');
        $turma->save();
        return redirect()->route('turma.index', compact('turma'));
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $turma = Turma::find($id);
        if(isset($turma)){
            return view('turma.edit', compact('turma'));
        }
            return view('turma.index');
    }

    public function update(TurmaRequest $request, $id)
    {
        $turma = Turma::find($id);
        if (isset($turma)) {
            $turma->nome = $request->input('nome');
            $turma->descricao = $request->input('descricao');
            $turma->save();
        }
            return redirect()->route('turma.index', compact('turma'));
    }

    public function destroy($id)
    {
        $turma = Turma::find($id);
        if (isset($turma)) {
            $turma->delete();
        }
            return redirect()->route('turma.index');

    }
}
