@include('layout._cabecalho')

<div class="container mt-5">

    <h2>Editar Aluno</h2>

    <form action="{{ route('admin.alunos.atualizar', $row->id) }}"
    method="POST">

        @csrf
        @method('PUT')

        @include('admin.alunos._form')

        <button class="btn btn-primary">
            Atualizar
        </button>

    </form>

</div>

@include('layout._rodape')