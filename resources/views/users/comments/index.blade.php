@extends('layouts.app')
@section('title', 'Comentários')
@section('content')
<div class="card mt-3 pd-1">
    <div class="card-header">
        <h3 class="card-title">Comentários do Usuário {{$user->name}} <a href="{{route('comments.create', $user->id)}}">+</a> </h3>
    </div>
    <div class="card-body">
        @csrf
        <div class="table-responsive">
            <form action="{{route('comments.index', $user->id)}}" method="GET">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                    <input type="text" name="search" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="basic-addon1">
                    <button class="btn btn-outline-primary"> Pesquisar</button>
                </div>
            </form>
            <table id="table" class="table table-hover text-nowrap table-striped">
                <thead class="table-secondary">
                    <tr>
                        <th class="col-2 border-top-0"> Conteúdo </th>
                        <th class="col-3 border-top-0"> Visível </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td class="col-2 border-top-0"> {{$comment->body}}</td>
                            <td class="col-3 border-top-0"> {{$comment->visible ? 'SIM' : 'NÃO'}}</td>
                            <td class="col-3 border-top-0">
                                <a href="{{route('comments.edit', ['user' => $user->id, 'id' => $comment->id])}}" class="btn btn-outline-primary"><i class="fas fa-pen"></i> Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection