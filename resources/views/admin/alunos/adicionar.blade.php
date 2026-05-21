@include('layout._cabecalho')

<div class="container mt-5">

    <h2>Adicionar Aluno</h2>

    <form action="{{ route('admin.alunos.salvar') }}"
    method="POST">

        @csrf

        @include('admin.alunos._form')

        <button class="btn btn-success">
            Salvar
        </button>

    </form>

</div>

@include('layout._rodape')