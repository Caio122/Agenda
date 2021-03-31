@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Turma</h2>
    <hr/>
    <a href="{{ url('turma/create') }}" class="btn btn-success">Nova Turma</a>
<br/><br/>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">descricao</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        @foreach($turma as $turmas)
        <tbody>
            <tr>
                <th>{{ $turmas->id }}</th>
                <th>{{ $turmas->nome }}</th>
                <td>{{ $turmas->descricao }}</td>
                <td>
                    <a href="{{ route('turma.edit',$turmas->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    <a href="{{ url('turma/delete',['id'=>$turmas->id])}}" class="btn btn-danger btn-sm">Remover</a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection