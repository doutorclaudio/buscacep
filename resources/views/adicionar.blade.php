@extends('app')
@section('content')
    <h1 class="mb-5">
        Adicionar CEP
    </h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('salvar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cep">Cep</label>
            <input type="text" class="form-control" name="cep" value="{{ $cep }}" id="cep" aria-describedby="cep">
        </div>
        <div class="form-group">
            <label for="cep">Logradouro</label>
            <input type="text" class="form-control" name="logradouro" value="{{ $logradouro }}" id="logradouro" aria-describedby="logradouro">
        </div>
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="text" class="form-control" name="numero" id="numero" aria-describedby="numero">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" value="{{ $bairro }}" id="bairro" aria-describedby="bairro">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" value="{{ $cidade }}" id="cidade" aria-describedby="cidade">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" name="estado" value="{{ $estado }}" id="estado" aria-describedby="estado">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
