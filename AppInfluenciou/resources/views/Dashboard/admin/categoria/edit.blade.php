@extends('Dashboard.components.base')

@section('title', 'Edututs+ - Dashboard do administrador : categorias')

@section('navbar')
    @include('Dashboard.components.navbar-admin')
@endsection

@section('sidebar')
    @include('Dashboard.components.sidebar-admin')
@endsection

@section('content')
    <h1 class="display-4">Criar Categoria</h1>
    <br>
    <form action="{{ route('categoria.update', ['categorium' => $categoria->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="col-12 mb-3">
                <label for="categoria_id">Selecione uma categoria pai: (Opcional)</label>
                <select name="categoria_id" id="categoria_id" class="form-control">
                    <option value="">Selecione uma categoria pai</option>
                    @if ($categoria_pai)
                        <option value="{{ $categoria_pai->id }}" selected>{{ $categoria_pai->categoria }}</option>
                    @endif
                    
                    @foreach ($categorias as $item)
                        <option value="{{ $item->id }}">{{ $item->categoria }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12 mb-3">
                <label for="categoria">Nome da categoria:</label>
                <input type="text" name="categoria" id="categoria" class="form-control {{ $errors->has('categoria') ? 'is-invalid': '' }}" value="{{ old('categoria') ?? $categoria->categoria }}">
                <div id="validationServer01Feedback" class="invalid-feedback">
                    {{ $errors->has('categoria') ? $errors->get('categoria')[0]: '' }}
                </div>
            </div>

            <div class="col-12 mb-3">
                <label for="descricao">Descrição: </label>
                <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control {{ $errors->has('descricao') ? 'is-invalid': '' }}">
                    {{ old('descricao') ?? $categoria->descricao }}
                </textarea>
                <div id="validationServer02Feedback" class="invalid-feedback">
                    {{ $errors->has('descricao') ? $errors->get('descricao')[0]: '' }}
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection