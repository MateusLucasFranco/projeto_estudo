@extends('layouts.app')
@section('title', 'Novo Comentário')
@section('content')
    <div class="-d flex justify-content-center row">
        <div class="col-md-8">
            <div class="card mt-3 p-1">
                <div class="card-header">
                    <h2 class="card-title">Novo Comentário para o Usuário {{$user->name}}</h2>
                </div>
                <div class="card-body">
                    @include('includes.validations-form')
                    <form method="POST" action="{{route('comments.store', $user->id)}}">
                        @include('users.comments._partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection