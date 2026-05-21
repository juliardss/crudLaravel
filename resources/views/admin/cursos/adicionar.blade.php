@extends('layout.site')

@section('titulo', 'Adicionar Curso')

@section('conteudo')
<div class="container">
    <h3 class="center">Adicionar Novo Curso</h3>
    
    <div class="row">
        <form action="{{ route('admin.cursos.salvar') }}" method="POST" enctype="multipart/form-data">
            
            {{ csrf_field() }} @include('admin.cursos._form') <button class="btn blue">Salvar Curso</button>
        </form>
    </div>
</div>
@endsection