@extends('layouts.app')
@section('title', 'Listagem de Usuários')
@section('content')
<div class="card mt-3 pd-1">
    <div class="card-header">
        <h3 class="card-title">Listagem de Usuários <a href="{{route('users.create')}}">+</a> </h3>
    </div>
    <div class="card-body">
        @csrf
        <div class="table-responsive">
            <form action="{{route('users.index')}}" method="GET">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                    <input type="text" name="search" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="basic-addon1">
                    <button class="btn btn-outline-primary"> Pesquisar</button>
                </div>
            </form>
            <table id="table" class="table table-hover text-nowrap table-striped">
                <thead class="table-secondary">
                    <tr>
                        <th class="col-2 border-top-0"> Nome </th>
                        <th class="col-3 border-top-0"> Email </th>
                        <th class="col-2 border-top-0"> Ações </th>
                        <th class="col-2 border-top-0"> Comentários </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="col-2 border-top-0"> {{$user->name}}</td>
                            <td class="col-3 border-top-0"> {{$user->email}}</td>
                            <td class="col-3 border-top-0">
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-outline-primary"><i class="fas fa-pen"></i> Editar</a>
                                <a href="{{route('users.show', $user->id)}}" class="btn btn-outline-secondary"><i class="fas fa-clipboard-list"></i> Detalhes</a>
                            </td>
                            <td class="col-3 border-top-0">
                                <a href="{{route('comments.index', $user->id)}}" class="btn btn-outline-info"><i class="fas fa-comments"></i> Anotações( {{$user->comments->count()}} )</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{$users->appends([
                    'search' => request()->get('search', '')
                ])->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
</div>
@endsection