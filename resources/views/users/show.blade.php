@extends('layouts.app')
@section('title', 'Informações do Usuário')
@section('content')
<div class="card mt-3 pd-1">
    <div class="card-header">
        <h3 class="card-title">Informações do {{$user->name}}</h3>
    </div>
    <div class="card-body">
        @csrf
        <div class="table-responsive">
            <table id="table" class="table table-hover text-nowrap table-striped">
                <thead class="table-secondary">
                    <tr>
                        <th class="col-2 border-top-0"> Nome </th>
                        <th class="col-3 border-top-0"> Email </th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td class="col-2 border-top-0">{{$user->name}}</td>
                            <td class="col-3 border-top-0">{{$user->email}}</td>
                        </tr>
                </tbody>
            </table>
            <form action="{{ route('users.delete', $user->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-outline-danger"><i class="fas fa-trash"></i> Deletar</button>
            </form>
        </div>
    </div>
</div>
@endsection