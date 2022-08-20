@extends('Dashboard.components.base')

@section('title', 'Edututs+ - Dashboard do administrador')

@section('navbar')
    @include('Dashboard.components.navbar-admin')
@endsection

@section('sidebar')
    @include('Dashboard.components.sidebar-admin')
@endsection

@section('content')
    <h1 class="display-4">Usuários</h1>
    <table class="table table-sm">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($collection as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->roles[0]->name }}</td>
                    <td>
                        <button class="btn btn-primary">Ações</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        Nenhum usuário cadastrado.
                    </td>
                </tr>
            @endforelse
            
        </tbody>
    </table>
@endsection