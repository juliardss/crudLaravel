@include('layout._cabecalho')

<div class="container mt-5">

    <h2>Alunos</h2>

    <a href="{{ route('admin.alunos.adicionar') }}"
    class="btn btn-primary mb-3">
        Adicionar
    </a>

    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Celular</th>
            <th>Imagem</th>
            <th>Curso</th>
            <th>Ações</th>
        </tr>

        @foreach($rows as $row)

        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nome }}</td>
            <td>{{ $row->celular }}</td>
            <td>{{ $row->imagem }}</td>
            <td>{{ $row->id_curso }}</td>

            <td>
                <a href="{{ route('admin.alunos.editar', $row->id) }}"
                class="btn btn-warning">
                    Editar
                </a>

                <a href="{{ route('admin.alunos.excluir', $row->id) }}"
                class="btn btn-danger">
                    Excluir
                </a>
            </td>
        </tr>

        @endforeach

    </table>

</div>

@include('layout._rodape')