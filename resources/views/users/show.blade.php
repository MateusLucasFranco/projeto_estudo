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
                        <th class="col-2 border-top-0"> Senha </th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td class="col-2 border-top-0">{{$user->name}}</td>
                            <td class="col-3 border-top-0">{{$user->email}}</td>
                            <td class="col-2 border-top-0">{{$user->password}}</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection