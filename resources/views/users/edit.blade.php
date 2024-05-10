@extends('layouts.app')
@section('title', 'Editar o Usuário {{$user->name}}')
@section('content')
    <div class="-d flex justify-content-center row">
        <div class="col-md-8">
            <div class="card mt-3 p-1">
                <div class="card-header">
                    <h1 class="card-title">Editar o Usuário {{$user->name}}</h1>
                </div>
                <div class="card-body">
                    @include('includes.validations-form')
                    <form method="POST" action="{{route('users.update', $user->id)}}" enctype="multipart/form-data">
                        @method('PUT')
                        @include('users._partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection