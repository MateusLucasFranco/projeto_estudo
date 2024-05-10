@extends('layouts.app')
@section('title', 'Editar o Comentário do Usuário {{$user->name}}')
@section('content')
    <div class="-d flex justify-content-center row">
        <div class="col-md-8">
            <div class="card mt-3 p-1">
                <div class="card-header">
                    <h2 class="card-title">Editar o Comentário do Usuário {{$user->name}}</h2>
                </div>
                <div class="card-body">
                    @include('includes.validations-form')
                    <form method="POST" action="{{route('comments.update', $comment->id)}}">
                        @method('PUT')
                        @include('users.comments._partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection