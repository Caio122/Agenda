@extends ('layouts.app')
@section('content')
<div class="container">

    <form id="frmturma" name="frmturma" action="{{ route('turma.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : ''}}" id="nome" name="nome" placeholder="Informe o nome">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('nome','Atenção o campo nome é obrigatório!')}}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="descricao">Descricao</label>
            <input type="text" class="form-control {{ $errors->has('descricao') ? 'is-invalid' : ''}}" id="descricao" name="descricao" placeholder="Informe a descricao">
            @if ($errors->has('descricao'))
            <div class="invalid-feedback">
                {{$errors->first('descricao','Atenção o campo descricao é obrigatório!')}}
            </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
