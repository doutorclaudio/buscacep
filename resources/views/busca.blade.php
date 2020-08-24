@extends('app')
@section('content')
    <h1 class="mb-5">
        Buscar CEP
    </h1>
    <form action="{{ route('buscar') }}" method="GET">
        <div class="form-group">
            <label for="cep">Cep</label>
            <input type="text" class="form-control" name="cep" id="cep" aria-describedby="cep">
            <small id="cep" class="form-text text-muted">Informe seu cep sempre nos padrões solicitados.</small>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
