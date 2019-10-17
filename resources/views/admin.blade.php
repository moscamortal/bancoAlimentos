@extends('layout.app',["current" => "home"])

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bem Vindo ao Banco de Alimentos - ADMIN</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado como ADMIN!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
