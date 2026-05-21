@extends('layout.site')

@section('titulo', 'Editar Curso')

@section('conteudo')
<div class="container">
    <h3 class="center">Editando Curso: {{ $row->titulo }}</h3>
    
    <div class="row">
     
        //método post é simbólico para o navegador entender
        <form action="{{ route('admin.cursos.atualizar', $row->id) }}" method="POST" enctype="multipart/form-data">
            
            {{ csrf_field() }}
            @method('PUT') @include('admin.cursos._form') 
            <button class="btn orange">Atualizar Curso</button>
        </form>
    </div>
</div>
@endsection