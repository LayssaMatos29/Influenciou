@extends('Dashboard.components.base')

@section('title', 'Edututs+ - Dashboard do administrador : categorias')

@section('navbar')
    @include('Dashboard.components.navbar-admin')
@endsection

@section('sidebar')
    @include('Dashboard.components.sidebar-admin')
@endsection

@section('content')
    <h1 class="display-4">Categorias</h1>
    <br>

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {!! Session::get('success') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    
    <a href="{{ route('categoria.create') }}" class="btn btn-primary mb-1">Adicionar Categoria</a>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Categoria</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categorias as $item)
                <tr>
                    <td>{{ $item->categoria }}</td>
                    <td>{{ $item->descricao }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('categoria.edit', ['categorium' => $item->id]) }}" class="btn btn-info">Editar</a>
                            <button type="button" class="btn btn-danger" onclick="remover('{{ route('categoria.destroy', ['categorium' => $item->id]) }}')" data-toggle="modal" data-target="#exampleModal">Excluir</button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhuma categoria cadastrada.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Atenção!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Você tem certeza que deseja excluir esta categoria?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                    <form id="delete-categoria" action="#" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Sim</button>
                    </form>
                </div>
          </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function remover(url) {
            let form = document.getElementById('delete-categoria')
            form.setAttribute('action', url)
            //$('#exampleModal').modal('show')
        }
    </script>
@endpush