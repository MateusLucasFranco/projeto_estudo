@extends('layouts.app')
@section('title', 'Cadastro de Usuário')
@section('content')
    <div class="-d flex justify-content-center row">
        <div class="col-md-8">
            <div class="card mt-3 p-1">
                <div class="card-header">
                    <h1 class="card-title">Cadastrar novo Usuário</h1>
                </div>
                <div class="card-body">
                    @include('includes.validations-form')
                    <form method="POST" action="{{route('users.store')}}">
                        @include('users._partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection