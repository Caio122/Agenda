@extends ('layouts.app')
@section('content')
    <div class="container">
        <form id="frmturma" name="frmturma" action="{{route('turma.update', $turma->id)}}" method="POST">
            @csrf
            @method('PUT')
            <h3>Editar</h3>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$turma->nome}}">
            </div>
            <div class="form-group">
                <label for="descricao">Descricao</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="{{$turma->descricao}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
