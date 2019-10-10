@extends('layout.app', ["current" => "produto"])

@section('body')

<form action="/produto" method="POST">
    @csrf
    <div class="form-group">
        <label for="nomeProduto">Nome do Produto</label>
        <input type="text" class="form-control" name="nomeProduto" 
            id="nomeProduto" placeholder="Produto">
            <input type="text" class="form-control" name="precoProduto" 
            id="precoProduto" placeholder="Valor">
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
    <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
</form>
@endsection