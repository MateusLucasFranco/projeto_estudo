@extends('layouts.app')
@section('title', 'Listagem de Usuários')
@section('content')
<h1>Listagem de Usuários
    <a href="{{route('users.create')}}">+</a>
</h1>

<ul>
    <li>{{$user->name}}</li>
    <li>{{$user->email}}</li>
    | <a href="{{route('users.show', $user->id)}}"></a>
</ul>
@endsection