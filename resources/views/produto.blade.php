@extends('layout.app', ["current" => "produto"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>

@if(count($produtos) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do produto</th>
                    <th>Valor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($produtos as $produto)
                <tr>
                    <td>{{$produto->id}}</td>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->valor}}</td>
                    <td>
                        <a href="/produto/{{$produto->id}}/edit" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/produto/{{$produto->id}}" class="btn btn-sm btn-danger" method="DELETE">Apagar</a>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/produto/create" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
    </div>
</div>



@endsection