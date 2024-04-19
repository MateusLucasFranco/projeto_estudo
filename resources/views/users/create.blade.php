@extends('layouts.app')
@section('title', 'Cadastro de Usuário')
@section('content')
    <form action="{{route('users.store')}}" method="POST">
        <div class="-d flex justify-content-center row">
            <div class="col-md-8">
                <div class="card mt-3 p-1">
                    <div class="card-header">
                        <h1 class="card-title">Cadastrar novo Usuário</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('users.store')}}">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-plus"></i></span>
                                <input type="text" name="name" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1">
                            </div>
                    
                    
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                    
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1">
                            </div>
        
                            <button type="button" class="btn btn-outline-primary"><i class="fas fa-save"></i> Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection