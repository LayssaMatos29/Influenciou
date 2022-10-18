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
    <form action="{{ route('categoria.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-row">
            @if ($categorias->count() > 0)
                <div class="col-12 mb-3">
                    <label for="categoria_id">Selecione uma categoria pai: (Opcional)</label>
                    <select name="categoria_id" id="categoria_id" class="form-control">
                        <option value="null">Selecione uma categoria pai</option>
                        @foreach ($categorias as $item)
                            <option value="{{ $item->id }}">{{ $item->categoria }}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            <div class="col-12 mb-3">
                <label for="categoria">Nome da categoria:</label>
                <input type="text" name="categoria" id="categoria" class="form-control {{ $errors->has('categoria') ? 'is-invalid': '' }}" value="{{ old('categoria') }}">
                <div id="validationServer01Feedback" class="invalid-feedback">
                    {{ $errors->has('categoria') ? $errors->get('categoria')[0]: '' }}
                </div>
            </div>
            <div class="col-12 mb-3">
                <label for="descricao">Descrição: </label>
                <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control {{ $errors->has('descricao') ? 'is-invalid': '' }}"></textarea>
                <div id="validationServer02Feedback" class="invalid-feedback">
                    {{ $errors->has('descricao') ? $errors->get('descricao')[0]: '' }}
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection